<?php

class AccountController3 extends CI_Controller {
    
	function __construct(){
		parent::__construct();		
		$this->load->model('AccountModel');
		$this->load->helper('url');
 
	}
 
	function index(){
		$where = array('id_user' => $this->session->userdata('id'));
		$data['akuns'] = $this->AccountModel->edit_data($where,'akun');
		$this->load->view('Accountsetting3',$data);
    }
    
    function edit($id_user){
		$where = array('id_user' => $id_user);
		$data['akuns'] = $this->AccountModel->edit_data($where,'akun');
		$this->load->view('Accountsetting3',$data);
    }

    function update(){
        $first_name = $this->input->post('firstName');
        $last_name = $this->input->post('lastName');
        $email = $this->input->post('email');
     
        $data = array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email
        );
     
        $where = array(
            'id_user' => $this->session->userdata('id')
        );
     
        $this->AccountModel->update_data($where,$data,'akun');
        redirect('AccountController3');
    
}
        function hapus($id_user){
        $where = array('id' => $id_user);
        $this->AccountModel->hapus_data($where,'akuns');
        redirect('AccountController3');
}
}
