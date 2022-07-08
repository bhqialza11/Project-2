<?php 
class login_model extends CI_Model{
    function login ($username, $password){ 
        $sql="select * from users where username=? and password= MD5(?) ";
        $data=[$username, $password];
        $query=$this->db->query($sql,$data);
        return $query->row();
    }

}
