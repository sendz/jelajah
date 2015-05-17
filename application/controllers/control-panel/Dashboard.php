<?php
	/**
	* Frontpage Admin Panel
	*/
	class Dashboard extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function index()
		{
			$this->load->view('control-panel/head');
			$this->load->view('control-panel/sidenav');
			#
			$this->load->view('control-panel/foot');
		}
	}
?>