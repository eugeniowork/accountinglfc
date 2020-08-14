<?php


class Login_model extends CI_Model{
    public function validate_login($email,$password){
        $this->db->where('email',$email);
        $query = $this->db->get('users');
        $row = $query->row_array();
        if($row){
            if(password_verify($password, $row['password'])){
                return $row;
            }
            else{
                return 'errorpass';
            }
        }
        else{
            return 'nouser';
        }
    }
}