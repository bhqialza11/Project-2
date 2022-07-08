<?php 
class merk_model extends CI_Model{
    public function getall(){
        $query=$this->db->get('merk');
        return $query->result();

    }
    public function delete($id){
        $sql="DELETE FROM merk WHERE id=?";
        $this->db->query($sql,[$id]);
    }
}
