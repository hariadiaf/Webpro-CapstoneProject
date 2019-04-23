<?php

class AccountModel extends CI_Model{

    function tampil_data(){
		return $this->db->get('akun');
	}

function edit_data($where,$table){	

    $query = $this->db->get_where($table,$where);
    return $query->result();
}
function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
}	
}