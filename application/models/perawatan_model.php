<?php 
class perawatan_model extends CI_Model{
    public function getall(){
        $query=$this->db->get('perawatan');
        return $query->result();

    }
    public function delete($id){
        $sql="DELETE FROM perawatan WHERE id=?";
        $this->db->query($sql,[$id]);
}
}