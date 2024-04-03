<?php 


class mAuto extends CI_Model{



    public function userExist($data){
         $user =  $this->db->get_where('autontication',$data);
         if($user->num_rows() > 0){
            return true;
        }
        else{
            return false;
        }
    }

    public function getPassword($data){
        $user =  $this->db->get_where('autontication',$data);
        if($user->num_rows() > 0){
           return true;
       }
       else{
           return false;
       }
    }

    public function insertUser($data){
        return $this->db->insert('autontication', $data);
    }


    
    public function getUserDB($lastname){
        $this->db->select('*');
        $this->db->from('account_tab');
        $this->db->join('autontication', ' autontication.lastname = account_tab.lastname', 'INNER');
        $this->db->where('autontication.lastname', $lastname);
        $query = $this->db->get();
        return $query->result();
 }

 public function getUserHomeDB($lastname){
    $this->db->select('*');
    $this->db->from('account_history');
    $this->db->join('autontication', ' autontication.lastname = account_history.lastname', 'INNER');
    $this->db->where('autontication.lastname', $lastname);
    $query = $this->db->get();
    return $query->result();
}



    public function isLastNameValid($lastname){
        $this->db->where('lastname', $lastname);
        $query = $this->db->get('autontication');
        return $query->result();    
    }


    public function isLastNameExist($lastname){
        $this->db->where('lastname', $lastname);
        $query = $this->db->get('autontication');
        return $query->row();    
    }

   


}