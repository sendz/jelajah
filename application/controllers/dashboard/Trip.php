<?php
  /**
   * Class for Index
   */
  class Trip extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
    }

    function index()
    {
      $this->load->view('dashboard/head');
      $this->load->view('dashboard/sidenav');
      $this->load->view('dashboard/trips'); // Trips contain all trip
      $this->load->view('dashboard/foot');
    }

    function detail()
    {
      $this->load->view('dashboard/head');
      $this->load->view('dashboard/sidenav');
      $this->load->view('dashboard/trip'); // Trip contain just trip detail
      $this->load->view('dashboard/foot');
    }
  }

?>
