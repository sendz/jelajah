<?php
/**
 * Class for Airline List
 */
class Airline extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('api/getairline');
    }

    // To show all airport on the db
    // index.php/api/airline/all/apikey/apisecret/
    function all()
    {
        $data['airline']    = $this->getairline->all();

        $this->load->view('api/api_airline',$data);
    }

    function search()
    {
        $keyword = $this->uri->segment(4);
        $data['airport']    = $this->getairline->search($keyword);

        $this->load->view('api/api_airline',$data);
    }
}
