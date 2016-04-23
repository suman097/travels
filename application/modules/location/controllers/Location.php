<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {

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
        $this->load->model('state/model_state');
        $this->load->model('flight-type/model_flight_type');
        $this->load->model('service-type/model_service_type');
        $this->load->model('model_location');
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
        $data['states'] = $this->model_state->showAllStateFront();
        $data['types'] = $this->model_flight_type->showAllTypesFront();
        $data['services'] = $this->model_service_type->showAllServicesFront();
        if ($this->input->post()) {
          $this->form_validation->set_rules('location', 'Location', 'trim|required|max_length[255]');

          $this->form_validation->set_message('required', '%s can\'t be blank');
          $this->form_validation->set_message('max_length', 'Max 255 character only allowed');

          if( $this->form_validation->run() === FALSE ){
              $this->load->view('create_location', $data);
          }else{
              $insert_data = $this->input->post();
              //print_r($insert_data); die;
              $this->db->insert('location', $insert_data);
              redirect('location/location');
          }
        }else{
  		      $this->load->view('create_location', $data);
        }
  	}

    public function viewLocation()
    {
        $session_details = $this->session->userdata('super_admin');
        $data['users_type'] = $session_details->users_type;
        $data['users_nikname'] = $session_details->users_nikname;
        $data['locations'] = $this->model_location->showAllLocation();
        $this->load->view('view_location', $data);
    }

    public function editLocation($id)
    {
        $session_details = $this->session->userdata('super_admin');
        $data['users_type'] = $session_details->users_type;
        $data['users_nikname'] = $session_details->users_nikname;
        $data['countries'] = $this->model_country->showAllCountryFront();
        $data['states'] = $this->model_state->showAllStateFront();
        $data['types'] = $this->model_flight_type->showAllTypesFront();
        $data['services'] = $this->model_service_type->showAllServicesFront();
        if ($this->input->post()) {
            $this->form_validation->set_rules('location', 'Location', 'trim|required|max_length[255]');

            $this->form_validation->set_message('required', '%s can\'t be blank');
            $this->form_validation->set_message('max_length', 'Max 255 character only allowed');

            if( $this->form_validation->run() === FALSE ){
                $this->load->view('edit_location', $data);
            }else{
                $this->db->update( 'location', $this->input->post(), "id = " . $this->input->post('id'));
                redirect('location/location/viewLocation');
            }
        }else{
            $data['location'] = $this->model_location->showAlllocationDetails($id);
            $this->load->view('edit_location', $data);
        }
    }
}
