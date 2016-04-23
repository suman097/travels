<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_type extends CI_Controller {

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
        $this->load->model('model_service_type');
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
          $this->form_validation->set_rules('service_type', 'Service Type', 'trim|required|max_length[255]');

          $this->form_validation->set_message('required', '%s can\'t be blank');
          $this->form_validation->set_message('max_length', 'Max 255 character only allowed');

          if( $this->form_validation->run() === FALSE ){
              $this->load->view('create_service_type', $data);
          }else{
              $insert_data = $this->input->post();
              $this->db->insert('service_type', $insert_data);
              redirect('service-type/service_type');
          }
        }else{
  		      $this->load->view('create_service_type', $data);
        }
  	}

    public function viewServiceType()
    {
        $session_details = $this->session->userdata('super_admin');
        $data['users_type'] = $session_details->users_type;
        $data['users_nikname'] = $session_details->users_nikname;
        $data['types'] = $this->model_service_type->showAllServices();
        $this->load->view('view_service_type', $data);
    }

    public function editServiceType($id)
    {
        $session_details = $this->session->userdata('super_admin');
        $data['users_type'] = $session_details->users_type;
        $data['users_nikname'] = $session_details->users_nikname;
        if ($this->input->post()) {
            $this->form_validation->set_rules('service_type', 'Service Type', 'trim|required|max_length[255]');

            $this->form_validation->set_message('required', '%s can\'t be blank');
            $this->form_validation->set_message('max_length', 'Max 255 character only allowed');

            if( $this->form_validation->run() === FALSE ){
                $this->load->view('edit_service_type', $data);
            }else{
                $update = array( 
                            'service_type' => $this->input->post('service_type'),
                            'status' => $this->input->post('status')
                         );
                $this->db->update( 'service_type', $update, "id = " . $this->input->post('type_id'));
                redirect('service-type/service_type/viewServiceType');
            }
        }else{
            $data['type'] = $this->model_service_type->showServiceTypeDetails($id);
            $this->load->view('edit_service_type', $data);
        }
    }
}
