<?php 
class users extends CI_Controller{
    public function index(){
        $this->load->model('users_model','user');
        $data['userdata']=$this->user->getall();
        $this->load->view('layout/header');
            $this->load->view('layout/navbar');
            $this->load->view('layout/sidebar');
            $this->load->view('users/index',$data);
            $this->load->view('layout/script');
    }
}