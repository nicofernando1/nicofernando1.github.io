<?php 
class Location_model extends CI_Model 
{

    public function addLocati($data)
    {
        return $this->db->insert('location',$data);
    }

    public function detailLocation($dd)
    {
        return $this->db->get_where('location',['id_location'=> $dd]);
    }

    public function getLoca()
    {
        return $this->db->get('location');
    }

    public function editLoc($dd, $data)
    {
        return $this->db->update('location',$data,['id_location' => $dd]);
    }

    public function deleteData($dd)
    {
        return $this->db->delete('location',['id_location'=> $dd]);
    }

    public function getData($limit,$start)
    {
        return $this->db->get('location',$limit,$start)->result_array();
    }

}