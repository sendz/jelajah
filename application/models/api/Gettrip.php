<?php
  /**
   * Class for generate API of Trip
   */
  class Gettrip extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }

    function index($limit,$offset)
    {
      // url:index.php/api/gettrip/index/pagenum/apikey/apisecret
      $query    = $this->db->get('trip',$limit,$offset);
      return $query->result();
    }
  }
