<?php

class mAccount extends CI_Model{


    public function getChildren(){
       $children = $this->db->get('children');
       if($children->num_rows() > 0){
          return $children->result();   
    }
    }


    public function createAccount($data){
        return $this->db->insert("account_tab", $data);
    }

    public function getAccount($data){
        $data = $this->db->get_where("account_tab", $data, 1);
        if($data->num_rows() > 0){
              return $data->result();   
        }
    }


    public function createAccountHistory($data){
        return $this->db->insert("account_history", $data);
    }

    public function getAccountHistory($data){
        $data = $this->db->get_where("account_history", $data);
        if($data->num_rows() > 0){
              return $data->result();   
        }
    }


    public function deleteAccount($lastname){
         $this->db->where('lastname', $lastname);
         $this->db->delete('account_tab');   
    }

    public function getChildrenId($childrenId){
        $childrenId = $this->db->get_where("account_tab", $childrenId , 1);
        if($childrenId->num_rows() > 0){
            return $childrenId->result();
        }
    }


    




}