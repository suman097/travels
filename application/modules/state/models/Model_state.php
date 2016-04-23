<?php

  Class Model_state extends CI_Model {

      function __construct() {
          parent::__construct();
          $this->load->database();
      }


      function showAllState() {
          $this->db->select('state.*, country.country');
          $this->db->join('country', 'country.id = state.country_id', 'left');
          $query = $this->db->get_where('state', array('state.is_deleted' => 0));
          $result = ($query->num_rows() > 0) ? $query->result(): '';
          return $result;
      }

      function showStateDetails($data) {
          $this->db->select('state.*, country.country');
          $this->db->join('country', 'country.id = state.country_id', 'left');
          $query = $this->db->get_where('state', array('state.id' => $data));
          $result = ($query->num_rows() > 0) ? $query->first_row() : '';
          return $result;
      }

      function showAllStateFront() {
          $query = $this->db->get_where('state', array( 'is_deleted' => 0, 'status' => 1 ));
          $results = ($query->num_rows() > 0) ? $query->result(): '';
          foreach ($results as $value) {
              $result[$value->id] = $value->state;
          }
          return $result;
      }

      function showAllStateFrontWithCountry($id) {
          $query = $this->db->get_where('state', array( 'country_id' => $id, 'is_deleted' => 0, 'status' => 1 ));
          $results = ($query->num_rows() > 0) ? $query->result(): '';
          if(!empty($results)){
              foreach ($results as $value) {
                  $result[$value->id] = $value->state;
              }
          }else{
              $result = array();
          }
          return $result;
      }
  }