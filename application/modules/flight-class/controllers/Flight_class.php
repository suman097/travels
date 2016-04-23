<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flight_class extends CI_Controller {

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
        $this->load->model('model_flight_class');
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
          $this->form_validation->set_rules('flight_class', 'Flight Class', 'trim|required|max_length[255]');

          $this->form_validation->set_message('required', '%s can\'t be blank');
          $this->form_validation->set_message('max_length', 'Max 255 character only allowed');

          if( $this->form_validation->run() === FALSE ){
              $this->load->view('create_flight_class', $data);
          }else{
              $insert_data = $this->input->post();
              $this->db->insert('flight_class', $insert_data);
              redirect('flight-class/flight_class');
          }
        }else{
  		      $this->load->view('create_flight_class', $data);
        }
  	}

    public function viewFlightClass()
    {
        $session_details = $this->session->userdata('super_admin');
        $data['users_type'] = $session_details->users_type;
        $data['users_nikname'] = $session_details->users_nikname;
        $data['types'] = $this->model_flight_class->showAllTypes();
        $this->load->view('view_flight_class', $data);
    }

    public function editFlightClass($id)
    {
        $session_details = $this->session->userdata('super_admin');
        $data['users_type'] = $session_details->users_type;
        $data['users_nikname'] = $session_details->users_nikname;
        if ($this->input->post()) {
            $this->form_validation->set_rules('flight_class', 'Flight Class', 'trim|required|max_length[255]');

            $this->form_validation->set_message('required', '%s can\'t be blank');
            $this->form_validation->set_message('max_length', 'Max 255 character only allowed');

            if( $this->form_validation->run() === FALSE ){
                $this->load->view('edit_flight_class', $data);
            }else{
                $update = array( 
                            'flight_class' => $this->input->post('flight_class'),
                            'status' => $this->input->post('status'),
                         );
                $this->db->update( 'flight_class', $update, "id = " . $this->input->post('flight_id'));
                redirect('flight-class/flight_class/viewFlightClass');
            }
        }else{
            $data['flight'] = $this->model_flight_class->showFlightClassDetails($id);
            $this->load->view('edit_flight_class', $data);
        }
    }
}
