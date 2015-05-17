<?php
	/**
	* Frontpage Admin Panel
	*/
	class Frontpage extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('getfrontpage');
		}

		function index()
		{
			$this->load->view('control-panel/head');
			$this->load->view('control-panel/sidenav');
			$this->load->view('control-panel/frontpage');
			$this->load->view('control-panel/foot');

		}

		function edit()
		{
			$section = $this->uri->segment(4);
			$data['query'] = $this->getfrontpage->getEntry($section);
			$this->load->view('control-panel/head');
			$this->load->view('control-panel/sidenav');
			$this->load->view('control-panel/frontpage-edit',$data);
			$this->load->view('control-panel/foot');
		}

		function update()
		{
			/* Upload File */
			/*
			$config['upload_path']		= "./uilibs/media/image/";
			$config['allowed_type']		= "jpg|png";
			$config['min_width']		= 1366;
			$config['remove_spaces']	= TRUE;
			$config['overwrite']		= FALSE;

			#$this->load->library()
			$this->upload->initialize($config);

			$field = 'frontpage-edit-file';

			$upload = $this->upload->do_upload($field);
			$error = $this->upload->display_errors('<p>','</p>');

			$fileinfo = $this->upload->data();

			echo $fileinfo['file_name'];

			if ($upload) {
				log_message('info',"upload");
			}
			$file_path = $this->upload->data('file_path');
			$file_name = $this->upload->data('file_name');

			*/
			$section = $_POST['frontpage-edit-section'];

			$verify = $this->getfrontpage->getEntry($section);

			$data = array(
				  'title'		=> $_POST['frontpage-edit-title']
				, 'content'		=> $_POST['frontpage-edit-content']
				, 'row'			=> $_POST['frontpage-edit-row']
				, 'section'		=> $_POST['frontpage-edit-section']
				, 'date'		=> $_POST['frontpage-edit-date']
				, 'author'		=> $_POST['frontpage-edit-author']
				, 'custom'		=> $_POST['frontpage-edit-custom']
				, 'show'		=> $_POST['frontpage-edit-show']
				);
			if ($verify) 
			{
				$this->db->update('frontpage',$data,array('section'=>$_POST['frontpage-edit-section']));
			} 
			
			/*
			else 
			{
				$this->db->insert('frontpage',$data);
			}*/
		}
	}
?>