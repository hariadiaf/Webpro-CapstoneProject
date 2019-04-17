<?php

class LoginModel extends CI_Model {
    
    public function getUserLogin($email,$password){
        $query = $this->db->get_where("Akun",['email'=>$email,'password'=>$password]);
        return $query->row_array();
    }
    
}