<?php
/**
 * Model for get airline database
 */
class Getairline extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function all()
    {
        $query = $this->db->get('airlines');
        return $query->result();
    }

    function search($keyword)
    {
        $this->db->like('name',$keyword);
        $this->db->or_like('alias',$keyword);
        $this->db->or_like('iata',$keyword);
        $this->db->or_like('icao',$keyword);
        $this->db->or_like('calsign',$keyword);
        $query = $this->db->get('airlines');
        return $query->result();
    }
}
