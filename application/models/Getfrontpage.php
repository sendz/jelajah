<?php
	/**
	* Model for frontpage
	*/
	class Getfrontpage extends CI_Model
	{
		/* Declaration of Variables */

		public $id;
		public $title;
		public $content;
		public $section;
		public $date;
		public $author;
		public $custom;
		public $show;

		public function __construct()
		{
			/* CI Model constructor */
			parent::__construct();
		}

		public function getEntries()
		{
			$query = $this->db->get_where('frontpage',array('show'=>'published'),'','');
			return $query->result();
		}

		public function insertEntry()
		{
			$this->title 	= $_POST['title'];
			$this->content 	= $_POST['content'];
			$this->section 	= $_POST['section'];
			$this->date 	= date() . time();
			$this->author 	= $_POST['author'];
			$this->custom 	= $_POST['custom'];
			$this->show 	= $_POST['show'];

			$this->db->insert('frontpage',$this);
		}

		public function updateEntry()
		{
			$this->title 	= $_POST['title'];
			$this->content 	= $_POST['content'];
			$this->section 	= $_POST['section'];
			$this->date 	= date() . time();
			$this->author 	= $_POST['author'];
			$this->custom 	= $_POST['custom'];
			$this->show 	= $_POST['show'];

			$this->db->update('frontpage',$this,array('section'=>$_POST['section']));
		}

		public function getEntry($section)
		{
			$newsection = $section;
			$query = $this->db->get_where('frontpage',array('section'=>$section));
			return $query->result();
		}

	}
?>