<?php

defined('BASEPATH') or exit('No direct script access allowed');


class account extends CI_Controller
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

    public function home()
    {
        $this->load->model('mAuto');
        $user = $this->session->userdata('lastname_user');
        $dataHistory = $this->mAuto->getUserHomeDB($user);
        $user = $this->session->set_userdata('history_data', $dataHistory);

        $this->load->view('home', $user);
    }



    public function signup()
    {
        $this->load->view('signup');
    }


    public function getSignup()
    {
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('con_password', 'Password',  'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Password is not matching or filled are missing. Please try again.');
            return redirect('account/signup');
        }

        $this->load->model('mAuto');
        $data['lastname'] = $this->input->post('lastname');
        $user_exist = $this->mAuto->userExist($data);
        if ($user_exist) {
            $this->session->set_flashdata('error', 'User already exists');
            return redirect('account/signup');
        }
        $data = $this->input->post();
        $this->load->model('mAuto');
        $lastname = $this->mAuto->insertUser($data);
        $this->session->set_userdata('signup_lastname', $lastname);
        return redirect('account/index');
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
        $userExist = $this->mAuto->userExist($lastname);
        if (!$userExist) {
            $this->session->set_flashdata('error', 'Username or Password not correct');
            return redirect('account/login');
        }
        $lastname = $this->input->post('lastname');
        $user = $this->mAuto->isLastNameValid($lastname);
        $this->session->set_userdata('login', $user);
        $this->session->set_userdata('lastname_user', $lastname);
        return redirect('account/user');
    }


    public function user()
    {

        $this->load->model('mAuto');
        $user = $this->session->userdata('lastname_user');
        $userdb['userdb'] = $this->mAuto->getUserDB($user);
        $this->load->view('user', $userdb);
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
        $this->session->unset_userdata('login');
        $this->load->view('login');
    }



    public function form()
    {
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('date', 'DATE', 'required');
        $this->form_validation->set_rules('ssn', 'SSN', 'required');
        $this->form_validation->set_rules('children_id', 'Num of children');
        $this->form_validation->set_rules('image', 'IMAGE');
        $this->form_validation->set_rules('zero_child', 'ZERO', 'default');
        $this->form_validation->set_rules('firstname_child_one', 'first');
        $this->form_validation->set_rules('ssn_child_one', 'SSN_first');
        $this->form_validation->set_rules('firstname_child_two', 'second');
        $this->form_validation->set_rules('ssn_child_two', 'SSN_second');
        $this->form_validation->set_rules('firstname_child_trhee', 'three');
        $this->form_validation->set_rules('ssn_child_three', 'SSN_three');
        $this->form_validation->set_rules('firstname_child_four', 'four');
        $this->form_validation->set_rules('ssn_child_four', 'SSN_four');
        $this->form_validation->set_rules('firstname_child_five', 'five');
        $this->form_validation->set_rules('ssn_child_five', 'SSN_five');
        $this->form_validation->set_rules('firstname_child_six', 'six');
        $this->form_validation->set_rules('ssn_child_six', 'SSN_six');
        $this->form_validation->set_rules('firstname_child_seven', 'seven');
        $this->form_validation->set_rules('ssn_child_seven', 'SSN_seven');
        $this->form_validation->set_rules('firstname_child_eight', 'eight');
        $this->form_validation->set_rules('ssn_child_eight', 'SSN_eight');
        $this->form_validation->set_rules('firstname_child_nine', 'nine');
        $this->form_validation->set_rules('ssn_child_nine', 'SSN_nine');
        $this->form_validation->set_rules('firstname_child_ten', 'ten');
        $this->form_validation->set_rules('ssn_child_ten', 'SSN_ten');

        $config['upload_path']  = 'application/assets/uploads/';
        $config['allowed_types']  = 'gif|jpg|png';
        $config['max_size'] = 19000;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'All fields are required');
            return redirect('account/index');
        } else if (!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error_file', $error);
            return redirect('account/index');
        }
        $image = array('upload_data' => $this->upload->data('image'));
        $this->session->set_flashdata('success_file_upload', $image);

        $data = $this->input->post('lastname');
        $this->load->model('mAuto');
        if (!$this->mAuto->isLastNameExist($data)) {
            $this->session->set_flashdata('userNOTmatch', 'Last Name Not Match In Account');
            return redirect('account/index');
        }
        $user = $this->session->userdata('lastname_user');
        if ($data != $user) {
            $this->session->set_flashdata('userNOTmatch', $data . ' Not Match In Account');
            return redirect('account/index');
        }

        else {
            $data = $this->input->post();
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
        return redirect('account/signup');
    }
}
