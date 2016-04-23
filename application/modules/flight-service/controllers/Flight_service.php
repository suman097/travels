<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flight_service extends CI_Controller {

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
        $this->load->model('model_flight_service');
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
          $this->form_validation->set_rules('flight_service', 'Flight Service', 'trim|required|max_length[255]');

          $this->form_validation->set_message('required', '%s can\'t be blank');
          $this->form_validation->set_message('max_length', 'Max 255 character only allowed');

          if( $this->form_validation->run() === FALSE ){
              $this->load->view('create_flight_service', $data);
          }else{
              $insert_data = $this->input->post();
              $this->db->insert('flight_service', $insert_data);
              redirect('flight-service/flight_service');
          }
        }else{
  		      $this->load->view('create_flight_service', $data);
        }
  	}

    public function viewFlightService()
    {
        $session_details = $this->session->userdata('super_admin');
        $data['users_type'] = $session_details->users_type;
        $data['users_nikname'] = $session_details->users_nikname;
        $data['types'] = $this->model_flight_service->showAllServices();
        $this->load->view('view_flight_services', $data);
    }

    public function editFlightService($id)
    {
        $session_details = $this->session->userdata('super_admin');
        $data['users_type'] = $session_details->users_type;
        $data['users_nikname'] = $session_details->users_nikname;
        if ($this->input->post()) {
            $this->form_validation->set_rules('flight_service', 'Flight Services', 'trim|required|max_length[255]');

            $this->form_validation->set_message('required', '%s can\'t be blank');
            $this->form_validation->set_message('max_length', 'Max 255 character only allowed');

            if( $this->form_validation->run() === FALSE ){
                $this->load->view('edit_flight_service', $data);
            }else{
                $update = array( 'flight_service' => $this->input->post('flight_service'), 'status' => $this->input->post('status') );
                $this->db->update( 'flight_service', $update, "id = " . $this->input->post('flight_id'));
                redirect('flight-service/flight_service/viewFlightService');
            }
        }else{
            $data['flight'] = $this->model_flight_service->showFlightServiceDetails($id);
            $this->load->view('edit_flight_service', $data);
        }
    }
}
