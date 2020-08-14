<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_controller extends CI_Controller {


	function __construct(){
		parent::__construct();
        if(!$this->session->userdata('user')){
            redirect('login');
        }
		//$this->load->model("login_model", 'login_model');
    }

    public function index(){
        $sessionData = $this->session->userdata('user');
        $url = '';
        if($sessionData['role'] == 0){
            $urlNavbar = 'inc/admin_navbar';
            $url = 'pages/admin/dashboard';
        }
        else{
            $urlNavbar = 'inc/user_navbar';
            $url = 'pages/user/dashboard';
        }

        $this->load->view('inc/header');
        $this->load->view($urlNavbar);
		$this->load->view($url);
		$this->load->view('inc/footer');
    }

    public function logout(){
        if($this->session->userdata('user')){
            session_destroy();
            $this->session->unset_userdata('user');
        }
        
        redirect('');
    }
}