<?php 
class merk extends CI_Controller{
    public function index(){
        $this->load->model('merk_model','merk');
        $data['merkdata']=$this->merk->getall();
        $this->load->view('layout/header');
            $this->load->view('layout/navbar');
            $this->load->view('layout/sidebar');
            $this->load->view('merk/index',$data);
            $this->load->view('layout/script');
    }
    public function delete(){
        $id = $this->input->get('id');
        $this->load->model('merk_model','merk');
        $this->merk->delete($id);
        redirect(base_url().'index.php/merk');
        
    }
}