<?php defined('BASEPATH') OR exit('No direct script access allowed');


    function getSessionData(){
        $CI =& get_instance();
        $CI->load->library('session');
        $sessionData = $CI->session->userdata();
        //$name = $sessionData['user_data']['firstname'].' '.$sessionData['user_data']['lastname'];
        $data = $sessionData['user'];

        return $data;
    }