<?php 
class sewamobil_model extends CI_Model{
    public function getall(){
        $query=$this->db->get('sewa');
        return $query->result();

    }
    public function delete($id){
        $sql="DELETE FROM sewa WHERE id=?";
        $this->db->query($sql,[$id]);
}