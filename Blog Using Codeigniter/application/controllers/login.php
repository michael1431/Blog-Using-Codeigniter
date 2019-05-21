<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login extends My_controller {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    /*
     * user login korar jnno index function used hoieche
     */

    public function index() {
        //session r kaj hoise ekhane
        if (!$this->session->userdata('id')) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('uname', 'User Name', 'required|alpha_numeric_spaces');
            $this->form_validation->set_rules('pass', 'Password', 'required|max_length[12]');


            $this->form_validation->set_error_delimiters('<div class = "text-danger">', '<div>');

            if ($this->form_validation->run()) {
                $username = $this->input->post('uname');
                $password = base64_encode($this->input->post('pass'));

                $this->load->model('loginModel');
                
                $login_id = $this->loginModel->isvalidate($username, $password);
                if ($login_id){
                    $sdata = array();
                    $sdata['id'] = $login_id->id;
                    $sdata['user_name'] = $login_id->user_name;


                    $this->load->library('session');
                    $this->session->set_userdata($sdata);
                    return redirect('Admin/welcome');
                    //echo 'Details matched';
                } else {
                    $this->session->set_flashdata('Login_failed', 'Invalid UserName/Password');
                    return redirect('login/index');
                    //echo 'Details not matched';
                }
            } else {
                $this->load->view('Admin/Login');
            }
        } else {
            return redirect('Admin/welcome');
        }
    }

}
