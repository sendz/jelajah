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
      $this->db->order_by('id','DESC'); # ini harusnya nanti diganti sama LAST MODIFIED
      $query    = $this->db->get('trip',$limit,$offset);
      return $query->result();
    }

    function detail($unique)
    {
      $query    = $this->db->get_where('trip',array('unique'=>$unique));
      return $query->result();
    }

    function getLastTrip()
    {
      #$this->db->order_by('id','DESC');
      $query = $this->db->query("SELECT * FROM trip order by id DESC limit 1");
      return $query->result();
    }
  }
