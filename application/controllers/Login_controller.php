<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {


	function __construct(){
		parent::__construct();

		$this->load->model("login_model", 'login_model');

		if($this->session->userdata('user')){
            redirect('dashboard');
        }
	}
	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('pages/auth/login');
		$this->load->view('inc/footer');
	}

	public function login_validate(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$defaultMsg = 'Please enter your ';
		$this->form_validation->set_rules('email','email', 'required', array('required' => $defaultMsg.'email'));
		$this->form_validation->set_rules('password','password', 'required', array('required' => $defaultMsg.'password'));
		if($this->form_validation->run() == FALSE){
			$this->data['status'] = "error";
			$this->data['msg'] = validation_errors();
		}
		else{
            $checkLogin = $this->login_model->validate_login($email,$password);
            if($checkLogin == "nouser"){
                $this->data['status'] = "error";
                $this->data['msg'] = "<p>Username does not exist!</p>";
            }
            else if($checkLogin == "errorpass"){
                $this->data['status'] = "error";
                $this->data['msg'] = "<p>Invalid password!</p>";
            }
            else{
				$this->data['status'] = "success";
				$this->session->set_userdata('user',$checkLogin);
				//redirect('');
				
            }
		}
		echo json_encode($this->data);
	}
}
