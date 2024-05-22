<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Account extends CI_Controller
{

    public function  __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->model('mAccount');
        $children['children'] = $this->mAccount->getChildren();
        $this->load->view('account', $children);
        $user = $this->session->userdata('lastname_user');
        if (!$user) {
            return redirect('account/signup');
        }
    }

    public function forgotpassform()
    {
        $this->load->view('forgot_password');
    }

    public function forgotpass()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        if ($this->form_validation->run() == False) {
            $this->session->set_flashdata('error', 'Please enter a username');
            return redirect('account/forgotpassform');
        }

        $username = $this->input->post('username');
        $this->session->set_userdata('username', $username);
        $this->load->model('mAuto');
        if (!$username = $this->mAuto->isLastNameExist($username)) {
            $this->session->set_flashdata('error', 'User name not found');
            return redirect('account/forgotpassform');
        }
    
        $this->load->view('reset_pass');

    }

    public function reset(){
        $this->load->view('reset_pass');

    }



    public function resetpass(){
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('con_password', 'Password',  'required|matches[password]');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Password is not matching or filled are missing. Please try again.');
            return redirect('account/reset');
        }

        $password = $this->input->post('password');
        $con_password = $this->input->post('con_password');

        $this->load->model('mAuto');
        $update = $this->mAuto->updateValue($password, $con_password);
        if($update){
            $this->session->set_flashdata('updated', 'Password updates successfully. Please return to the login page.');
            // return redirect('account/reset');
            $this->load->view('password_updated');   
        }
    }






    public function home()
    {

        $user = $this->session->userdata('lastname_user');
        if (!$user) {
            return redirect('account/signup');
        } else {

            $this->load->model('mAuto');
            $user = $this->session->userdata('lastname_user');
            $dataHistory = $this->mAuto->getUserHomeDB($user);
            $user = $this->session->set_userdata('history_data', $dataHistory);

            $this->load->view('home', $user);
        }
    }



    public function signup()
    {
        $this->load->view('signup');
    }


    public function getSignup()
    {
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('con_password', 'Password',  'required|matches[password]');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Password is not matching or filled are missing. Please try again.');
            return redirect('account/signup');
        }

        $this->load->model('mAuto');
        $data['lastname'] = ucwords($this->input->post('lastname'));
        $user_exist = $this->mAuto->userExist($data);
        if ($user_exist) {
            $this->session->set_flashdata('error', 'User already exists');
            return redirect('account/signup');
        }
        $data['firstname'] = ucwords($this->input->post('firstname'));
        $data['lastname'] = ucwords($this->input->post('lastname'));
        $data['password'] = $this->input->post('password');

        $data['con_password'] = $this->input->post('con_password');

        $this->load->model('mAuto');
        if ($this->mAuto->insertUser($data)) {

            $this->session->set_flashdata('user_signup', 'Hello  ' . $data['lastname'] . ' Please login for the first time to create a new form.');
            return redirect('account/login');
        }
    }


    public function getLogin()
    {
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'All fields are required');
            return redirect('account/login');
        }
        $this->load->model('mAuto');
        $lastname['lastname'] = $this->input->post('lastname');
        $password = $this->input->post('password');

        $userExist = $this->mAuto->userExist($lastname);
        if (!$userExist) {
            $this->session->set_flashdata('error', 'Invalid username');
            return redirect('account/login');
        }

        if (!$this->mAuto->isPasswordExist($password)) {
            $this->session->set_flashdata('passNotMatch', "Invalid password");
            return redirect('account/login');
        }

        $lastname = ucwords($this->input->post('lastname'));
        $user = $this->mAuto->isLastNameValid($lastname);

        $this->session->set_userdata('login', $user);
        $this->session->set_userdata('lastname_user', $lastname);
        return redirect('account/user');
    }


    public function user()
    {


        $user = $this->session->userdata('lastname_user');
        if (!$user) {
            return redirect('account/signup');
        } else {

            $this->load->model('mAuto');
            $user = $this->session->userdata('lastname_user');
            $userdb['userdb'] = $this->mAuto->getUserDB($user);
            $this->load->view('user', $userdb);
        }
    }

    public function delete()
    {

        $this->load->model('mAccount');
        $user = $this->session->userdata('lastname_user');
        $this->mAccount->deleteAccount($user);

        return redirect('account/user');
    }

    public function create()
    {
        // $this->load->model('mAccount');
        // $user = $this->session->userdata('lastname_user');
        // $this->mAccount->deleteAccount($user);
        return redirect('account/index');
    }


    public function login()
    {
        $this->load->view('login');
    }



    public function form()
    {
        $this->form_validation->set_rules('username', 'UserName', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('date', 'DATE', 'required');
        $this->form_validation->set_rules('ssn', 'SSN', 'required|regex_match[/^\d{3}-\d{2}-\d{4}$/]');
        $this->form_validation->set_rules('second_username', 'UserName', 'required');
        $this->form_validation->set_rules('second_lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('second_date', 'DATE', 'required');
        $this->form_validation->set_rules('second_ssn', 'SSN', 'required|regex_match[/^\d{3}-\d{2}-\d{4}$/]');

        $this->form_validation->set_rules('image', 'IMAGE');
        $this->form_validation->set_rules('second_image', 'IMAGE');
        $this->form_validation->set_rules('children_id', 'Num of children');
        $this->form_validation->set_rules('zero_child', 'ZERO', 'default');
        $this->form_validation->set_rules('username_child_one', 'username');
        $this->form_validation->set_rules('firstname_child_one', 'first');
        $this->form_validation->set_rules('ssn_child_one', 'SSN_first');
        $this->form_validation->set_rules('username_child_two', 'username');
        $this->form_validation->set_rules('firstname_child_two', 'second');
        $this->form_validation->set_rules('ssn_child_two', 'SSN_second');
        $this->form_validation->set_rules('username_child_three', 'username');
        $this->form_validation->set_rules('firstname_child_trhee', 'three');
        $this->form_validation->set_rules('ssn_child_three', 'SSN_three');
        $this->form_validation->set_rules('username_child_four', 'username');
        $this->form_validation->set_rules('firstname_child_four', 'four');
        $this->form_validation->set_rules('ssn_child_four', 'SSN_four');
        $this->form_validation->set_rules('username_child_five', 'username');
        $this->form_validation->set_rules('firstname_child_five', 'five');
        $this->form_validation->set_rules('ssn_child_five', 'SSN_five');
        $this->form_validation->set_rules('username_child_six', 'username');
        $this->form_validation->set_rules('firstname_child_six', 'six');
        $this->form_validation->set_rules('ssn_child_six', 'SSN_six');
        $this->form_validation->set_rules('username_child_seven', 'username');
        $this->form_validation->set_rules('firstname_child_seven', 'seven');
        $this->form_validation->set_rules('ssn_child_seven', 'SSN_seven');
        $this->form_validation->set_rules('username_child_eight', 'username');
        $this->form_validation->set_rules('firstname_child_eight', 'eight');
        $this->form_validation->set_rules('ssn_child_eight', 'SSN_eight');
        $this->form_validation->set_rules('firstname_child_nine', 'nine');
        $this->form_validation->set_rules('ssn_child_nine', 'SSN_nine');
        $this->form_validation->set_rules('firstname_child_ten', 'ten');
        $this->form_validation->set_rules('ssn_child_ten', 'SSN_ten');
        $this->form_validation->set_rules('dob_child_one', 'dob_one');
        $this->form_validation->set_rules('dob_child_two', 'dob_two');
        $this->form_validation->set_rules('dob_child_three', 'dob_three');
        $this->form_validation->set_rules('dob_child_four', 'dob_four');
        $this->form_validation->set_rules('dob_child_five', 'dob_five');
        $this->form_validation->set_rules('dob_child_six', 'dob_six');
        $this->form_validation->set_rules('dob_child_seven', 'dob_seven');
        $this->form_validation->set_rules('dob_child_eight', 'dob_eight');
        $this->form_validation->set_rules('dob_child_nine', 'dob_nine');
        $this->form_validation->set_rules('dob_child_ten', 'dob_ten');



        $config['upload_path']  = 'application/assets/uploads/';
        $config['allowed_types']  = 'gif|jpg|png';
        $config['max_size'] = 19000;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->form_validation->run() === FALSE) {
            if ($this->input->post('username') ==  "") {
                $this->session->set_flashdata('error', 'First Name is missing.');
                return redirect('account/index');
            } elseif ($this->input->post('lastname') ==  "") {
                $this->session->set_flashdata('error', 'Last Name is missing');
                return redirect('account/index');
            } elseif ($this->input->post('ssn') ==  "") {
                $this->session->set_flashdata('error', 'SSN is missing');
                return redirect('account/index');
            } elseif ($this->input->post('date') ==  "") {
                $this->session->set_flashdata('error', 'SSN is missing');
                return redirect('account/index');
            }
            if ($this->input->post('second_username') ==  "") {
                $this->session->set_flashdata('error', 'First Name is missing.');
                return redirect('account/index');
            } elseif ($this->input->post('second_lastname') ==  "") {
                $this->session->set_flashdata('error', 'Last Name is missing');
                return redirect('account/index');
            } elseif ($this->input->post('second_ssn') ==  "") {
                $this->session->set_flashdata('error', 'SSN is missing');
                return redirect('account/index');
            } elseif ($this->input->post('second_date') ==  "") {
                $this->session->set_flashdata('error', 'SSN is missing');
                return redirect('account/index');
            }

            // if($this->input->post("children_id") == 1){
            //     if($this->input->post('username_child_one') ==  ""){
            //         $this->session->set_flashdata('error', 'Child First Name is missing');
            //         return redirect('account/index');

            //     }
            //     elseif($this->input->post('firstname_child_one') ==  ""){
            //         $this->session->set_flashdata('error', 'Child Last Name is missing');
            //         return redirect('account/index');
            //     }
            //     elseif($this->input->post('ssn_child_one') ==  ""){
            //         $this->session->set_flashdata('error', 'Child SSN is missing');
            //         return redirect('account/index');
            //     }
            //     elseif($this->input->post('dob_child_one') ==  ""){
            //         $this->session->set_flashdata('error', 'Child Date is missing');
            //         return redirect('account/index');
            //     }
            // }

            // elseif($this->input->post('username_child_two') ==  ""){
            //     $this->session->set_flashdata('error', 'Child First Name is missing');
            //     return redirect('account/index');
            // }
            // elseif($this->input->post('firstname_child_two') ==  ""){
            //     $this->session->set_flashdata('error', 'Child Last Name is missing');
            //     return redirect('account/index');
            // }
            // elseif($this->input->post('ssn_child_two') ==  ""){
            //     $this->session->set_flashdata('error', 'Child SSN is missing');
            //     return redirect('account/index');
            // }
            // elseif($this->input->post('dob_child_two') ==  ""){
            //     $this->session->set_flashdata('error', 'Child Date is missing');
            //     return redirect('account/index');
            // }
            // elseif($this->input->post('username_child_three') ==  ""){
            //     $this->session->set_flashdata('error', 'Child First Name is missing');
            //     return redirect('account/index');
            // }
            // elseif($this->input->post('firstname_child_three') ==  ""){
            //     $this->session->set_flashdata('error', 'Child Last Name is missing');
            //     return redirect('account/index');
            // }
            // elseif($this->input->post('ssn_child_three') ==  ""){
            //     $this->session->set_flashdata('error', 'Child SSN is missing');
            //     return redirect('account/index');
            // }
            // elseif($this->input->post('dob_child_three') ==  ""){
            //     $this->session->set_flashdata('error', 'Child Date is missing');
            //     return redirect('account/index');
            // }
            // elseif($this->input->post('username_child_four') ==  ""){
            //     $this->session->set_flashdata('error', 'Child First Name is missing');
            //     return redirect('account/index');
            // }
            // elseif($this->input->post('firstname_child_four') ==  ""){
            //     $this->session->set_flashdata('error', 'Child Last Name is missing');
            //     return redirect('account/index');
            // }
            // elseif($this->input->post('ssn_child_four') ==  ""){
            //     $this->session->set_flashdata('error', 'Child SSN is missing');
            //     return redirect('account/index');
            // }
            // elseif($this->input->post('dob_child_four') ==  ""){
            //     $this->session->set_flashdata('error', 'Child Date is missing');
            //     return redirect('account/index');
            // }
        }

        // } else if (!$this->upload->do_upload('image')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->session->set_flashdata('error_file', $error);
        //     return redirect('account/index');

        $image = array('upload_data' => $this->upload->data('image'));
        $this->session->set_flashdata('success_file_upload', $image);

        $data = $this->input->post('lastname');
        // $data = $this->input->post('seccond_lastname');
        $this->load->model('mAuto');
        if (!$this->mAuto->isLastNameExist($data)) {
            $this->session->set_flashdata('userNOTmatch', 'Last Name Not Match In Account');
            return redirect('account/index');
        }
        // $user = $this->session->userdata('lastname_user');
        // if ($data != $user) {
        //     $this->session->set_flashdata('userNOTmatch', $data . ' Not Match In Account');
        //     return redirect('account/index');
        // } 
        if ($user = !$this->mAuto->isLastNameValid($data)) {
            $this->session->set_flashdata('userNOTmatch', $user . ' Not Match In Account');
            return redirect('account/index');
        } else {

            $data = $this->input->post();

            $data['username'] = ucwords($this->input->post('username'));
            $data['lastname'] = ucwords($this->input->post('lastname'));
            $data['second_username'] = ucwords($this->input->post('second_username'));
            $data['second_lastname'] = ucwords($this->input->post('second_lastname'));
            $data['username_child_one'] = ucwords($this->input->post('username_child_one'));
            $data['firstname_child_one'] = ucwords($this->input->post('firstname_child_one'));
            $data['username_child_two'] = ucwords($this->input->post('username_child_two'));
            $data['firstname_child_two'] = ucwords($this->input->post('firstname_child_two'));
            $data['username_child_three'] = ucwords($this->input->post('username_child_three'));
            $data['firstname_child_three'] = ucwords($this->input->post('firstname_child_three'));
            $data['username_child_four'] = ucwords($this->input->post('username_child_four'));
            $data['firstname_child_four'] = ucwords($this->input->post('firstname_child_four'));
            $data['username_child_five'] = ucwords($this->input->post('username_child_five'));
            $data['firstname_child_five'] = ucwords($this->input->post('firstname_child_five'));
            $data['username_child_six'] = ucwords($this->input->post('username_child_six'));
            $data['firstname_child_six'] = ucwords($this->input->post('firstname_child_six'));
            // $data['lastname'] = $this->input->post('lastname');
            // if($this->mAuto->isLastNameValid($data)){
            $this->load->model('mAccount');
            $this->mAccount->createAccount($data);
            $this->mAccount->createAccountHistory($data);

            $dataInfo = $this->mAccount->getAccount($data);
            $this->session->set_flashdata('success', $dataInfo);
            $dataId['children_id'] = $this->input->post('children_id');
            $childrenId = $this->mAccount->getChildrenId($dataId);
            $this->session->set_flashdata('childrenID', $childrenId);

            $this->load->view('info');
        }



        // return redirect('AccountController/index');
    } // End of accountResult function



    public function logout()
    {
        $this->session->unset_userdata('login');
        $this->session->unset_userdata('lastname_user');
        return redirect('account/signup');
    }
}
