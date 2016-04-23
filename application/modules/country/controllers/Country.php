<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country extends CI_Controller {

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
        $this->load->model('model_country');
        $this->load->model('state/model_state');
        if (!$this->session->userdata('super_admin')) {
            redirect('admin-login/login');
        }
    }

  	public function index()
  	{
        $session_details = $this->session->userdata('super_admin');
        $data['users_type'] = $session_details->users_type;
        $data['users_nikname'] = $session_details->users_nikname;
        if ($this->input->post()) {
          $this->form_validation->set_rules('country', 'Country', 'trim|required|max_length[255]');

          $this->form_validation->set_message('required', '%s can\'t be blank');
          $this->form_validation->set_message('max_length', 'Max 255 character only allowed');

          if( $this->form_validation->run() === FALSE ){
              $this->load->view('create_country', $data);
          }else{
              $insert_data = $this->input->post();
              $this->db->insert('country', $insert_data);
              redirect('country/country');
          }
        }else{
  		      $this->load->view('create_country', $data);
        }
  	}

    public function viewCountry()
    {
        $session_details = $this->session->userdata('super_admin');
        $data['users_type'] = $session_details->users_type;
        $data['users_nikname'] = $session_details->users_nikname;
        $data['countries'] = $this->model_country->showAllCountry();
        $this->load->view('view_country', $data);
    }

    public function editCountry($id)
    {
        $session_details = $this->session->userdata('super_admin');
        $data['users_type'] = $session_details->users_type;
        $data['users_nikname'] = $session_details->users_nikname;
        if ($this->input->post()) {
            $this->form_validation->set_rules('country', 'Country', 'trim|required|max_length[255]');

            $this->form_validation->set_message('required', '%s can\'t be blank');
            $this->form_validation->set_message('max_length', 'Max 255 character only allowed');

            if( $this->form_validation->run() === FALSE ){
                $this->load->view('edit_country', $data);
            }else{
                $update = array( 
                            'country' => $this->input->post('country'),
                            'status' => $this->input->post('status')
                         );
                $this->db->update( 'country', $update, "id = " . $this->input->post('country_id'));
                redirect('country/country/viewCountry');
            }
        }else{
            $data['country'] = $this->model_country->showCountryDetails($id);
            $this->load->view('edit_country', $data);
        }
    }

    public function ajaxChangeCountryWithLocationType()
    {
        if ($this->input->is_ajax_request()) {
            if($this->input->post('id')){
                $countries = $this->model_country->showCountryDetailsWithLocationType($this->input->post('id'));
                $output['country'] = form_dropdown('country_id', $countries, 1, array( 'class' => 'm-wrap span12', 'onchange' => 'onChangeStateByCountry(this.value);' ));
                $country_id = ($this->input->post('id') == 2 ? 95 : 1);
                $states = $this->model_state->showAllStateFrontWithCountry($country_id);
                $output['state'] = form_dropdown('state_id', $states, 1, array( 'class' => 'm-wrap span12' ));
                echo json_encode($output);
            }else{
                exit('id not found');
            }

        }else{
            exit('No direct script access allowed');
        }
    }
}
