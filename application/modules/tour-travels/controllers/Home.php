<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
        $this->load->model('flight-type/model_flight_type');
        $this->load->model('trip-type/model_trip_type');
    }

  	public function index()
  	{
        $data = array();
        $data['types'] = $this->model_flight_type->showAllTypesFront();
        $data['trips'] = $this->model_trip_type->showAllTripsFront();
        //print_r($data['trips']); die;
        $this->load->view('home', $data);
  	}

    
}
