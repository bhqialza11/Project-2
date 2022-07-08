<?php
class sewamobil extends CI_Controller{
    public function index(){
       $this->load->model('sewamobil_model','sewamobil');
       $data['sewamobildata']=$this->sewamobil->getall();
       
       $this->load->view('layout/header');
       $this->load->view('layout/navbar');
       $this->load->view('layout/sidebar');
       $this->load->view('sewamobil/index',$data);
       $this->load->view('layout/script');
    }
    public function delete(){
        $id = $this->input->get('id');
        $this->load->model('sewamobil_model','sewa');
        $this->sewa->delete($id);
        redirect(base_url().'index.php/sewamobil');
        
}