<?php 
class Register_model extends CI_Model 
{
    public function insertRegister($data)
    {
        return $this->db->insert('users',$data);
    }

} 