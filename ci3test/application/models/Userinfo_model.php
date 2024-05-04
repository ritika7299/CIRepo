<?php
class Userinfo_model extends CI_Model {

    function insertuser($data)
    {
        $this->db->insert('users',$data)
    }
}