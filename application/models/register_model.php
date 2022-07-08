<?php
class register_model extends CI_model{
    public function store($data){
    $sql = "INSERT INTO users (username,password,email,created_at,last_login,status,role) VALUES (?,MD5(?),?,?,?,?,?)";
    $this->db->query($sql,$data);

    }
}