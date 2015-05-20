<?php
  /**
   * Class for Airport List
   */
  class Airport extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('api/getairport');
    }

    // To show all airport on the db
    // index.php/api/airport/all/apikey/apisecret/
    function all()
    {
      $data['airport']    = $this->getairport->all();

      $this->load->view('api/api_airport',$data);
    }

    function search()
    {
      $keyword = $this->uri->segment(4);
      $data['airport']    = $this->getairport->search($keyword);

      $this->load->view('api/api_airport',$data);
    }
  }
