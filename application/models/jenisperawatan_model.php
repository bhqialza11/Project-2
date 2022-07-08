<?php 
class jenisperawatan_model extends CI_Model{
    public function getall(){
        $query=$this->db->get('jenis_perawatan');
        return $query->result();

    }
    public function delete($id){
        $sql="DELETE FROM jenis_perawatan WHERE id=?";
        $this->db->query($sql,[$id]);
    }
}