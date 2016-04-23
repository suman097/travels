<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trip_type extends CI_Controller {

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
        $this->load->model('model_trip_type');
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
          $this->form_validation->set_rules('trip_type', 'Trip Type', 'trim|required|max_length[255]');

          $this->form_validation->set_message('required', '%s can\'t be blank');
          $this->form_validation->set_message('max_length', 'Max 255 character only allowed');

          if( $this->form_validation->run() === FALSE ){
              $this->load->view('create_trip_type', $data);
          }else{
              $insert_data = $this->input->post();
              $this->db->insert('trip_type', $insert_data);
              redirect('trip-type/trip_type');
          }
        }else{
  		      $this->load->view('create_trip_type', $data);
        }
  	}

    public function viewTripType()
    {
        $session_details = $this->session->userdata('super_admin');
        $data['users_type'] = $session_details->users_type;
        $data['users_nikname'] = $session_details->users_nikname;
        $data['types'] = $this->model_trip_type->showAllTypes();
        $this->load->view('view_trip_type', $data);
    }

    public function editTripType($id)
    {
        $session_details = $this->session->userdata('super_admin');
        $data['users_type'] = $session_details->users_type;
        $data['users_nikname'] = $session_details->users_nikname;
        if ($this->input->post()) {
            $this->form_validation->set_rules('trip_type', 'Trip Type', 'trim|required|max_length[255]');

            $this->form_validation->set_message('required', '%s can\'t be blank');
            $this->form_validation->set_message('max_length', 'Max 255 character only allowed');

            if( $this->form_validation->run() === FALSE ){
                $this->load->view('edit_trip_type', $data);
            }else{
                $update = array( 'trip_type' => $this->input->post('trip_type'), 'status' => $this->input->post('status') );
                $this->db->update( 'trip_type', $update, "id = " . $this->input->post('trip_id'));
                redirect('trip-type/trip_type/viewTripType');
            }
        }else{
            $data['trip'] = $this->model_trip_type->showTripTypeDetails($id);
            $this->load->view('edit_trip_type', $data);
        }
    }
}
