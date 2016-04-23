<?php

  Class Model_country extends CI_Model {

      function __construct() {
          parent::__construct();
          $this->load->database();
      }


      function showAllCountry() {
          $query = $this->db->get_where('country', array('is_deleted' => 0));
          $result = ($query->num_rows() > 0) ? $query->result(): '';
          return $result;
      }

      function showCountryDetails($data) {
          $query = $this->db->get_where('country', array('id' => $data));
          $result = ($query->num_rows() > 0) ? $query->first_row() : '';
          return $result;
      }

      function showAllCountryFront() {
          $query = $this->db->get_where('country', array( 'status' => 1, 'is_deleted' => 0));
          $results = ($query->num_rows() > 0) ? $query->result(): '';
          foreach ($results as $key => $value) {
            $result[$value->id] = $value->country;
          }
          return $result;
      }

      function showCountryDetailsWithLocationType($id) {

          $oparetor = ($id == 2 ? "" : " !=");
          $query = $this->db->get_where('country', array( 'id'.$oparetor => 95, 'status' => 1, 'is_deleted' => 0));
          $results = ($query->num_rows() > 0) ? $query->result(): '';
          foreach ($results as $key => $value) {
            $result[$value->id] = $value->country;
          }
          return $result;
      }
  }