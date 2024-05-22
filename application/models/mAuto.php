<?php


class mAuto extends CI_Model
{



    public function userExist($data)
    {
        $user =  $this->db->get_where('autontication', $data);
        if ($user->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }



    public function insertUser($data)
    {
        return $this->db->insert('autontication', $data);
    }



    public function get_pass_by_username($username, $pass)
    {
        $this->db->where('lastname', $username, 'password', $pass);
        $query = $this->db->get('autontication'); // Assuming your users table name is 'users'
        return $query->row_array(); // Return user data as an associative array
    }




    public function updateValue($password, $con_password)
    {
        $data = array('password' => $password, 'con_password' => $con_password);
        $this->db->where('lastname', $this->session->userdata('username'));  
        $update = $this->db->update('autontication', $data);    
        if($update)
        {
            return true;
        }
        else
        {
           return false;
        }
    }







    public function getUserDB($lastname)
    {
        $this->db->select('*');
        $this->db->from('account_tab');
        $this->db->join('autontication', ' autontication.lastname = account_tab.lastname', 'INNER');
        $this->db->where('autontication.lastname', $lastname);
        $query = $this->db->get();
        return $query->result();
    }

    public function getUserHomeDB($lastname)
    {
        $this->db->select('*');
        $this->db->from('account_history');
        $this->db->join('autontication', ' autontication.lastname = account_history.lastname', 'INNER');
        $this->db->where('autontication.lastname', $lastname);
        $query = $this->db->get();
        return $query->result();
    }



    public function isLastNameValid($lastname)
    {
        $this->db->where('lastname', $lastname);
        $query = $this->db->get('autontication');
        return $query->result();
    }


    public function isLastNameExist($lastname)
    {
        $this->db->where('lastname', $lastname);
        $query = $this->db->get('autontication');
        return $query->row();
    }



    public function isPasswordExist($password)
    {
        $this->db->where('password', $password);
        $query = $this->db->get('autontication');
        return $query->row();
    }
}
