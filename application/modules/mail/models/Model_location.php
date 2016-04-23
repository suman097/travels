<?php

  Class Model_location extends CI_Model {

      function __construct() {
          parent::__construct();
          $this->load->database();
      }


      function showAllLocation() {
          $this->db->select('location.*, service_type.service_type, flight_type.flight_type, state.state, country.country');
          $this->db->join('service_type', 'service_type.id = location.service_type', 'left');
          $this->db->join('flight_type', 'flight_type.id = location.location_type', 'left');
          $this->db->join('country', 'country.id = location.country_id', 'left');
          $this->db->join('state', 'state.id = location.state_id', 'left');
          $query = $this->db->get_where('location', array('location.is_deleted' => 0));
          $result = ($query->num_rows() > 0) ? $query->result(): '';
          return $result;
      }

      function showAlllocationDetails($data) {
          $this->db->select('location.*, flight_type.flight_type, state.state, country.country');
          $this->db->join('flight_type', 'flight_type.id = location.location_type', 'left');
          $this->db->join('country', 'country.id = location.country_id', 'left');
          $this->db->join('state', 'state.id = location.state_id', 'left');
          $query = $this->db->get_where('location', array('location.id' => $data));
          $result = ($query->num_rows() > 0) ? $query->first_row() : '';
          return $result;
      }
  }