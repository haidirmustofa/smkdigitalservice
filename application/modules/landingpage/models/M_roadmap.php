<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_roadmap extends CI_Model
{

    public function getForLanding()
    {
        $this->db->select('*');
        $this->db->from('roadmap');
        $this->db->limit(4);
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function get()
    {
        $this->db->select('*');
        $this->db->from('roadmap');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getBySlug($slug)
    {
        $this->db->select('*');
        $this->db->from('roadmap');
        $this->db->where('RoadmapSlug', $slug);
        $query = $this->db->get()->result_array();
        return $query;
    }
}
