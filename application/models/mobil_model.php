<?php 
class mobil_model extends CI_Model{
    public function getall(){
        $query=$this->db->get('mobil');
        return $query->result();

    }
    public function delete($id){
        $sql="DELETE FROM mobil_model WHERE id=?";
        $this->db->query($sql,[$id]);
}