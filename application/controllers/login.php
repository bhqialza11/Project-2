<?php
//defined('BASHPATH') OR exit('No direct script access allowed');

class login extends CI_Controller{
    public function index(){
        $this->load->view('login');
	}
    public function proseslogin(){
        $this->load->model('login_model','login');

        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $row=$this->login->login($username,$password);
        if(isset($row)){
            $this->session->set_userdata('username',$row->username);
            $this->session->set_userdata('role',$row->role);
            $this->session->set_userdata('user',$row);
            redirect(base_url().'index.php/users');    
        }else {
            echo'logingagal';
        }
    }

}





