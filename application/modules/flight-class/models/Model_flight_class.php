<?php

  Class Model_flight_class extends CI_Model {

      function __construct() {
          parent::__construct();
          $this->load->database();
      }


      function showAllTypes() {
          $query = $this->db->get_where('flight_class', array('is_deleted' => 0));
          $result = ($query->num_rows() > 0) ? $query->result(): '';
          return $result;
      }

      function showFlightClassDetails($data) {
          $query = $this->db->get_where('flight_class', array('id' => $data));
          $result = ($query->num_rows() > 0) ? $query->first_row() : '';
          return $result;
      }
  }