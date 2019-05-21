<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class admin_login_controller extends My_controller {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function index(){

        //session r kaj hoise ekhane
        if (!$this->session->userdata('a_id')) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('a_name', 'User Name', 'required|alpha');
            $this->form_validation->set_rules('a_password', 'Password', 'required|max_length[12]');


            $this->form_validation->set_error_delimiters('<div class = "text-danger">', '<div>');

            if ($this->form_validation->run()) {
                $username = $this->input->post('a_name');
                $password = md5($this->input->post('a_password'));
                //echo md5($password);
                //exit();

                $this->load->model('loginModel');

                $login_id = $this->loginModel->isvalidateAdmin($username, $password);
                if ($login_id) {
                    $sdata = array();
//                        $sdata['a_password'] = $login_id->a_pass;
//                        echo $sdata['a_password'];
//                         exit();
                    $sdata['a_id'] = $login_id->a_id;
                    $sdata['a_name'] = $login_id->a_name;
                    $sdata['a_email'] = $login_id->a_email;
                    $sdata['a_contact'] = $login_id->a_contact;
                    $sdata['a_pic'] = $login_id->a_pic;
//                    
                    $sdata['a_status'] = $login_id->a_status;
                    

                    $this->load->library('session');
                    $this->session->set_userdata($sdata);
                    return redirect('Super_Admin/homeAdmin');
                    //echo 'Details matched';
                } else {
                    $this->session->set_flashdata('Login_failed', 'Invalid UserName/Password');
                    return redirect('admin_login_controller/index');
                    //echo 'Details not matched';
                }
            } else {
                $this->load->view('SuperAdmin/AdminLogin');
            }
        } else {
            return redirect('Super_admin/homeAdmin');
        }
    }

    public function admin_user_logout() {

        $this->session->unset_userdata('a_id');
        
        $this->load->view('SuperAdmin/AdminLogin');
    }

}
