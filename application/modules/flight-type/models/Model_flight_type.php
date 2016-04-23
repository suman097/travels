<?php

  Class Model_flight_type extends CI_Model {

      function __construct() {
          parent::__construct();
          $this->load->database();
      }


      function showAllTypes() {
          $query = $this->db->get_where('flight_type', array('is_deleted' => 0));
          $result = ($query->num_rows() > 0) ? $query->result(): '';
          return $result;
      }

      function showFlightTypeDetails($data) {
          $query = $this->db->get_where('flight_type', array('id' => $data));
          $result = ($query->num_rows() > 0) ? $query->first_row() : '';
          return $result;
      }

      function showAllTypesFront() {
          $query = $this->db->get_where('flight_type', array( 'status' => 1, 'is_deleted' => 0 ));
          $results = ($query->num_rows() > 0) ? $query->result(): '';
          foreach($results as $value){
              $result[$value->id] = $value->flight_type;
          }
          return $result;
      }
  }