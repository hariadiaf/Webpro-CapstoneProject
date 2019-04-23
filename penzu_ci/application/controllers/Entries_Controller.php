<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entries_Controller extends CI_Controller {
function __construct(){
       parent::__construct();
       $this->load->library(array('form_validation'));
       $this->load->helper(array('url','form'));
       $this->load->model('EntriesModel');
  }

	public function index()
	{
      $data["entri"] = $this->EntriesModel->getDataJurnal();
			$this->load->view('entries',$data);

	}
  public function tambahEntries(){
    $valid = $this->form_validation;
    $valid->set_rules("title","title","required");
    $valid->set_rules("deskripsi","deskripsi","required");

    if($this->form_validation->run() == false){
      redirect("Entries_Controller");
    }else{
        $data = array(
            "title" => $this->input->post('title'),
            "text" => $this->input->post('deskripsi'),
            "date" => date('Y-m-d H:i:s'),
        );
        $this->EntriesModel->addJurnal($data);
        redirect("Entries_Controller");
    }
}

public function hapusEntries($id){
  $where = array('idJurnal' => $id);
  $this->EntriesModel->deleteJurnal("entries",$where);
}
public function ubahEntries($id){
  $where = array('idJurnal' => $id);
  $data = array(
    "title" => $this->input->post('title'),
    "text" => $this->input->post('deskripsi'),
    "date" => date('Y-m-d H:i:s'),
  );
  $this->EntriesModel->updateJurnal("entries",$where);
  redirect("entries");
}

public function getDataJurnalWhere($id){
    $data['ent'] = $this->EntriesModel->getDataJurnalWheres($id);
    $this->load->view('entries',$data);
}

}
