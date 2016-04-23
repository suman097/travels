<?php

  Class Model_trip_type extends CI_Model {

      function __construct() {
          parent::__construct();
          $this->load->database();
      }


      function showAllTypes() {
          $query = $this->db->get_where('trip_type', array('is_deleted' => 0));
          $result = ($query->num_rows() > 0) ? $query->result(): '';
          return $result;
      }

      function showTripTypeDetails($data) {
          $query = $this->db->get_where('trip_type', array('id' => $data));
          $result = ($query->num_rows() > 0) ? $query->first_row() : '';
          return $result;
      }

      function showAllTripsFront() {
          $query = $this->db->get_where('trip_type', array( 'status' => 1, 'is_deleted' => 0));
          $result = ($query->num_rows() > 0) ? $query->result(): '';
          return $result;
      }
  }