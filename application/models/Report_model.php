<?php 
class Report_model extends CI_Model 
{
    public function repTicket()
    {
        $this->db->select('*');
        $this->db->from('ticket');
        $this->db->where('status',"resolved")->or_where ('status',"Rejected");

        return $this->db->get()->result();
    }
}