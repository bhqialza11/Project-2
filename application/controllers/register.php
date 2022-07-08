<?php
class register extends CI_Controller{
    public function index(){
       $this->load->view('register');
    }
    public function store(){
        $this->load->model('register_model','register');
        $username= $this->input->post('username');
        $password= $this->input->post('password');
        $email = $this->input->post('email');
        $role= $this->input->post('role');
        $data_register=[$username,$password,$email,'2022-06-12 06:51:03','2022-06-12 06:51:03','1',$role];
        $this->register->store($data_register);
        redirect(base_url().'index.php/login');


    }
}