<?php
  /**
   * Model for get airport database
   */
  class Getairport extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }

    function all()
    {
      $query = $this->db->get('airport');
      return $query->result();
    }

    function search($keyword)
    {
      $this->db->like('port_name',$keyword);
      $this->db->or_like('city_name',$keyword);
      $this->db->or_like('country',$keyword);
      $this->db->or_like('iata',$keyword);
      $this->db->or_like('icao',$keyword);
      $query = $this->db->get('airport');
      return $query->result();
    }
  }
