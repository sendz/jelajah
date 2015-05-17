<?php
	/**
	* Load data dari table port
	*/
	class Getport extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
		}

		function index()
		{
			$query = $this->db->get('port');
			return $query->result();
		}

		function getAirport()
		{
			$query = $this->db->get_where('port',array('category'=>'airport'));
			return $query->result();
		}

		function getTrainStation()
		{
			$query = $this->db->get_where('port',array('category'=>'railstation'));
			return $query->result();
		}

		function getBusStation()
		{
			$query = $this->db->get_where('port',array('category'=>'busstation'));
			return $query->result();
		}

		function getSeaport()
		{
			$query = $this->db->get_where('port',array('category'=>'seaport'));
			return $query->result();
		}

		function getSinglePort($id)
		{
			$query = $this->db->get_where('port',array('id'=>$id));
			return $query->result();
		}
	}
?>
