<?php
  /**
   * Class for generate JSON of dashboard
   */
  class Dashboard extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('api/gettrip');
    }

    function index()
    {
      // url:index.php/api/gettrip/index/pagenum/limit/apikey/apisecret
      $limit      = $this->uri->segment(5);
      $pagenum    = $this->uri->segment(4);

      $data['dashboard']    = $this->gettrip->index($limit,$pagenum);
      $this->load->view('api/api_dashboard', $data);
    }

    function addTrip()
    {
      $unique_id    = 
    }
  }
