<?php

  Class Model_flight_service extends CI_Model {

      function __construct() {
          parent::__construct();
          $this->load->database();
      }


      function showAllServices() {
          $query = $this->db->get_where('flight_service', array('is_deleted' => 0));
          $result = ($query->num_rows() > 0) ? $query->result(): '';
          return $result;
      }

      function showFlightServiceDetails($data) {
          $query = $this->db->get_where('flight_service', array('id' => $data));
          $result = ($query->num_rows() > 0) ? $query->first_row() : '';
          return $result;
      }
  }