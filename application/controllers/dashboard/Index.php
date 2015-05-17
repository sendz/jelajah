<?php
  /**
   * Class for Index
   */
  class Index extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
    }

    function index()
    {
      $this->load->view('dashboard/head');
      $this->load->view('dashboard/sidenav');
      $this->load->view('dashboard/trips');
      $this->load->view('dashboard/foot');
    }
  }

?>
