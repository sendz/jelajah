<?php
	/**
	* Class Home.php
	* Homepage
	*/
	class Home extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('getfrontpage');
		}

		public function index()
		{
			/* Getting content from Model */
			$data['query'] = $this->getfrontpage->getEntries();
			$this->load->view('head');
			$this->load->view('front_nav');
			$this->load->view('modal_signin');
			$this->load->view('modal_register');
			$this->load->view('home_body',$data);
			$this->load->view('foot');
		}
	}
?>