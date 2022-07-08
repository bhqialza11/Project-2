<?php
class perawatan extends CI_Controller{
    public function index(){
       $this->load->model('perawatan_model','perawatan');
       $data['perawatandata']=$this->perawatan->getall();
       
       $this->load->view('layout/header');
       $this->load->view('layout/navbar');
       $this->load->view('layout/sidebar');
       $this->load->view('perawatan/index',$data);
       $this->load->view('layout/script');
    }
    public function delete(){
        $id = $this->input->get('id');
        $this->load->model('perawatan_model','perawatan');
        $this->perawatan->delete($id);
        redirect(base_url().'index.php/perawatan');
        
}