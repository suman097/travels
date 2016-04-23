<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State extends CI_Controller {

  	/**
  	 * Login form of super admin.
  	 * @see https://codeigniter.com/user_guide/general/urls.html
  	 */

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('country/model_country');
        $this->load->model('model_state');
        if (!$this->session->userdata('super_admin')) {
            redirect('admin-login/login');
        }
    }

  	public function index()
  	{
        $session_details = $this->session->userdata('super_admin');
        $data['users_type'] = $session_details->users_type;
        $data['users_nikname'] = $session_details->users_nikname;
        $data['countries'] = $this->model_country->showAllCountryFront();
        if ($this->input->post()) {
          $this->form_validation->set_rules('state', 'State', 'trim|required|max_length[255]');

          $this->form_validation->set_message('required', '%s can\'t be blank');
          $this->form_validation->set_message('max_length', 'Max 255 character only allowed');

          if( $this->form_validation->run() === FALSE ){
              $this->load->view('create_state', $data);
          }else{
              $insert_data = $this->input->post();
              //print_r($insert_data); die;
              $this->db->insert('state', $insert_data);
              redirect('state/state');
          }
        }else{
  		      $this->load->view('create_state', $data);
        }
  	}

    public function viewState()
    {
        $session_details = $this->session->userdata('super_admin');
        $data['users_type'] = $session_details->users_type;
        $data['users_nikname'] = $session_details->users_nikname;
        $data['states'] = $this->model_state->showAllState();
        $this->load->view('view_state', $data);
    }

    public function editState($id)
    {
        $session_details = $this->session->userdata('super_admin');
        $data['users_type'] = $session_details->users_type;
        $data['users_nikname'] = $session_details->users_nikname;
        $data['countries'] = $this->model_country->showAllCountryFront();
        if ($this->input->post()) {
            $this->form_validation->set_rules('state', 'State', 'trim|required|max_length[255]');

            $this->form_validation->set_message('required', '%s can\'t be blank');
            $this->form_validation->set_message('max_length', 'Max 255 character only allowed');

            if( $this->form_validation->run() === FALSE ){
                $this->load->view('edit_state', $data);
            }else{
                $update = array( 
                            'country_id' => $this->input->post('country_id'),
                            'state' => $this->input->post('state'),
                            'status' => $this->input->post('status')
                         );
                $this->db->update( 'state', $update, "id = " . $this->input->post('state_id'));
                redirect('state/state/viewState');
            }
        }else{
            $data['state'] = $this->model_state->showStateDetails($id);
            $this->load->view('edit_state', $data);
        }
    }

    public function ajaxChangeStateWithCountry()
    {
        if ($this->input->is_ajax_request()) {
            if($this->input->post('id')){
                $states = $this->model_state->showAllStateFrontWithCountry($this->input->post('id'));
                echo form_dropdown('state_id', $states, 1, array( 'class' => 'm-wrap span12' ));
            }else{
                exit('id not found');
            }
        }else{
            exit('No direct script access allowed');
        }
    }
}
