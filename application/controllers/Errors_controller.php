<<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors_controller extends CI_Controller{

    public function unauthorized(){
        $this->load->view('errors/html/unauthorized');
    }
}