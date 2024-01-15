<?php 
class Auth_model extends CI_Model 
{

    public function getData()
    {
        return $this->db->get('users');
    }

    public function ceklogin($username, $password)
    {
        return $this->db->get_where('users',['username'=> $username, 'password'=>md5($password)]);
    }

    public function cek ($email)
    {
        return $this->db->get_where('users',['email'=> $email]);
    }
}