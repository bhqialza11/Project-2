<?php
class jenisperawatan extends CI_Controller{
    public function index(){
       $this->load->model('jenisperawatan_model','jenis_perawatan');
       $data['jenisperawatandata']=$this->jenis_perawatan->getall();
       $this->load->view('layout/header');
       $this->load->view('layout/navbar');
       $this->load->view('layout/sidebar');
       $this->load->view('jenisperawatan/index',$data);
       $this->load->view('layout/script');
    }
    public function delete(){
        $id = $this->input->get('id');
        $this->load->model('jenisperawatan_model','jenis_perawatan');
        $this->jenis_perawatan->delete($id);
        redirect(base_url().'index.php/jenisperawatan');
        
    }
    public function delete(){
        $id = $this->input->get('id');
        $this->load->model('jenisperawatan_model','perawatan');
        $this->merk->delete($id);
        redirect(base_url().'index.php/jenisperawatan');
}
}