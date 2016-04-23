<?php

  Class Model_service_type extends CI_Model {

      function __construct() {
          parent::__construct();
          $this->load->database();
      }


      function showAllServices() {
          $query = $this->db->get_where('service_type', array('is_deleted' => 0));
          $result = ($query->num_rows() > 0) ? $query->result(): '';
          return $result;
      }

      function showServiceTypeDetails($data) {
          $query = $this->db->get_where('service_type', array('id' => $data));
          $result = ($query->num_rows() > 0) ? $query->first_row() : '';
          return $result;
      }

      function showAllServicesFront() {
          $query = $this->db->get_where('service_type', array( 'status' => 1, 'is_deleted' => 0));
          $results = ($query->num_rows() > 0) ? $query->result(): '';
          foreach ($results as $value) {
              $result[$value->id] = $value->service_type;
          }
          return $result;
      }
  }