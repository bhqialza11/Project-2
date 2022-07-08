<?php 
class mobil extends CI_Controller{
    public function index(){
        $this->load->model('mobil_model','mobil');
        $data['mobildata']=$this->mobil->getall();
        
        $this->load->view('layout/header');
            $this->load->view('layout/navbar');
            $this->load->view('layout/sidebar');
            $this->load->view('mobil/index',$data);
            $this->load->view('layout/script');
    }
    public function delete(){
        $id = $this->input->get('id');
        $this->load->model('mobil_model','mobil');
        $this->mobil->delete($id);
        redirect(base_url().'index.php/mobil');
        
}