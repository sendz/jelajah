<?php
  /**
   * Class for generate JSON of dashboard
   */
  class Trip extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('api/gettrip');
    }

    // Index Page of User's Dashboard
    function index()
    {
      // url:index.php/api/trip/index/pagenum/limit/apikey/apisecret
      $limit      = $this->uri->segment(5);
      $pagenum    = $this->uri->segment(4);

      $data['dashboard']    = $this->gettrip->index($limit,$pagenum);
      $this->load->view('api/api_dashboard', $data);
    }

    function detail()
    {
      // url:index.php/api/trip/detail/unique/apikey/apisecret
      $unique = $this->uri->segment(4);
      $data['tripdetail']   = $this->gettrip->detail($unique);
      $this->load->view('api/api_detail',$data);
    }

    // View Detailed Page
    function trip()
    {
      // url:index.php/api/gettrip/detail/unique_id/apikey/apisecret


    }

    // AJAX to Add Trip
    function addtrip()
    {
      $data               = $this->gettrip->getLastTrip();
      foreach ($data as $data) {
        $id = $data->id + 1;
      }
      $unique             = $id.="TEST";#$_POST['add-trip-title'];
      $unique_id          = base64_encode($unique);
      #$owner             = base64_encode($_SESSION['username']);
      $data = array(
          'title'         => $_POST['add-trip-title']
        , 'description'   => $_POST['add-trip-description']
        , 'unique'        => $unique_id
        #, 'owner'        => $owner
      );
      $this->db->insert('trip',$data);
      echo "Data Submitted";
    }
  }
