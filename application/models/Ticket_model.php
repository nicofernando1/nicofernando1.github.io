<?php 
class Ticket_model extends CI_Model 
{

    public function detailTicket()
    {
        //$nama = $this->db->query("SELECT *FROM tbl_stok");
        //return $nama->result();
        return $this->db->get('ticket');
    }

    public function tampilTicket($dt)
    {
        return $this->db->get_where('ticket',['Id_Ticket' => $dt]);
    }

    public function ticketOverview()
    {
        return $this->db->get('ticket');
    }

    public function addTicket($data)
    {
        return $this->db->insert('ticket',$data);
    }

    public function updateTicket($dt, $data)
    {
        return $this->db->update('ticket',$data,['Id_Ticket'=>$dt]);
    }

    public function getData()
    { 
        return $this->db->get('location');
    }

    public function getStatus()
    {
        return $this->db->get('status');
    }

    public function deleteTicket($dt)
    {
        return $this->db->delete('ticket',['Id_Ticket'=> $dt]);
    }

    public function addLocati($data)
    {
        return $this->db->insert('location',$data);
    }

    public function GetLoca()
    {
        return $this->db->get('location');
    }

    public function getInfo($limit,$start)
    {
        return $this->db->get('ticket',$limit,$start)->result_array();
    }

    public function getAllreq()
    {
        $this->db->select('*');
        $this->db->from('ticket');
        $this->db->where('status', 'Request');

        return $this->db->get()->num_rows();
    }

    public function getAllassi()
    {
        $this->db->select('*');
        $this->db->from('ticket');
        $this->db->where('status', 'Assigned');

        return $this->db->get()->num_rows();
    }

    public function getAllpro()
    {
        $this->db->select('*');
        $this->db->from('ticket');
        $this->db->where('status', 'Progress');

        return $this->db->get()->num_rows();
    }

    public function getAllpen()
    {
        $this->db->select('*');
        $this->db->from('ticket');
        $this->db->where('status', 'Pending');

        return $this->db->get()->num_rows();
    }

    public function getAllres()
    {
        $this->db->select('*');
        $this->db->from('ticket');
        $this->db->where('status', 'Resolved');

        return $this->db->get()->num_rows();
    }

    public function getAllrej()
    {
        $this->db->select('*');
        $this->db->from('ticket');
        $this->db->where('status', 'Rejected');

        return $this->db->get()->num_rows();
    }



    public function ticketbyid($vie)
    {
        return $this->db->get_where('ticket',['user_id' => $vie]);

    }

    public function viewtick()
    {
        return $this->db->get_where('ticket');

    }

}