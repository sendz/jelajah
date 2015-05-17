<?php
	/**
	* Port manager, Aiport, Seaport, Train, Bus Terminal, Pangkalan Ojek, Tempat mangkal
	* Mamang becak
	*/
	class Port extends CI_Controller
	{

		function __construct()
		{
			parent::__construct();
			$this->load->model('control-panel/getport');
		}

		function index()
		{
			$data['ports'] 					= $this->getport->index();
			$data['airport'] 				= $this->getport->getAirport();
			$data['trainstation'] 	= $this->getport->getTrainStation();
			$data['busstation']			= $this->getport->getBusStation();
			$data['seaport']				= $this->getport->getSeaPort();
			$this->load->view('control-panel/head');
			$this->load->view('control-panel/sidenav');
			$this->load->view('control-panel/port',$data);
			$this->load->view('control-panel/foot');
		}

		function add()
		{
			$this->load->view('control-panel/head');
			$this->load->view('control-panel/sidenav');
			$this->load->view('control-panel/addport');
			$this->load->view('control-panel/foot');
		}

		function edit()
		{
			$id 										= $this->uri->segment(4);
			$data['port']						= $this->getport->getSinglePort($id);
			$this->load->view('control-panel/head');
			$this->load->view('control-panel/sidenav');
			$this->load->view('control-panel/addport',$data);
			$this->load->view('control-panel/foot');
		}

		function insert()
		{
			$category = $_POST['port-add-category'];

			$data = array(
				  'category'		=> $_POST['port-add-category']
				, 'code'				=> $_POST['port-add-code']
				, 'city'				=> $_POST['port-add-city']
				, 'country'			=> $_POST['port-add-country']
				, 'location'		=> $_POST['port-add-location']
				, 'timezone'		=> $_POST['port-add-timezone']
			);

			$this->db->insert('port',$data);
			$header_location = base_url() . index_page() . '/control-panel/port.html';
			header("location:".$header_location);
		}

		function update()
		{
			$id = $this->uri->segment(4);

			$data = array(
				  'category'		=> $_POST['port-add-category']
				, 'code'				=> $_POST['port-add-code']
				, 'city'				=> $_POST['port-add-city']
				, 'country'			=> $_POST['port-add-country']
				, 'location'		=> $_POST['port-add-location']
				, 'timezone'		=> $_POST['port-add-timezone']
			);
			$this->db->update('port',$data,array('id'=>$id));
			$header_location = base_url() . index_page() . '/control-panel/port.html';
			header("location:".$header_location);
		}

		function delete()
		{
			$id = $this->uri->segment(4);
			$this->db->where('id',$id);
			$this->db->delete('port');
			$header_location = base_url() . index_page() . '/control-panel/port.html';
			header("location:".$header_location);
		}
	}
?>
