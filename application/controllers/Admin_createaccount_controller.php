<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_createaccount_controller extends CI_Controller{
    function __construct(){
		parent::__construct();
        if(!$this->session->userdata('user')){
            redirect('login');
        }
        else{
            $sessionData = $this->session->userdata('user');
            if(!$sessionData['role'] == 0){
                redirect('unauthorized');
            }
        }
        
		//$this->load->model("login_model", 'login_model');
    }

    public function index(){

        $this->load->view('inc/header');
        $this->load->view('inc/admin_navbar');
        $this->load->view('pages/admin/dashboard');
        $this->load->view('pages/admin/create_account');
		$this->load->view('inc/footer');
    }
}
