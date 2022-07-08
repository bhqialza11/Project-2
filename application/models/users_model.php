<?php 
class users_model extends CI_Model{
    public function getall(){
        $query=$this->db->get('users');
        return $query->result();

    }
    
}