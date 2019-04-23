<?php

  class EntriesModel extends CI_Model{

       public function addJurnal($data)
       {
            $this->db->insert('entries',$data);
       }
       function getDataJurnal(){
      		$this->db->select("idJurnal,title,text,date");
      		$this->db->from("entries");
      		$query = $this->db->get();
      		if($query->num_rows() != 0){
      			return $query->result();
            print_r($query->result());
      		}else{
      			return false;
      		}
      	}
       // public function EditJurnal($data, $where)
       // {
       //      $this->db->where($where)
       //      // $this->db->update('entries',$data);
       // }
       public function deleteJurnal($table, $where){
      		$this->db->where($where);
      		$this->db->delete('entries',$table);
	     }
       public function getDataJurnalWheres($where){
         $this->db->select("idJurnal,title,text,date");
         $this->db->from("entries");
         $this->db->where("idJurnal",$where);
         $query = $this->db->get();
         if($query->num_rows() != 0){
           return $query->result();
         }else{
           return false;
         }
       }
  }