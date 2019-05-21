<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Super_admin extends My_controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        
    }

    
    public function homeAdmin()
            
    {
        
        if(!($this->session->userdata('a_id')))
        redirect('admin_login_controller/index','refresh');
        $data = array();
        $this->load->model('loginModel');
        $data['all_user_info'] = $this->loginModel->user_details();
        $data['all_articles_by_user'] = $this->loginModel->art_details();
        $data['admin_infos'] = $this->loginModel->admin_details();
        $this->load->view('SuperAdmin/admin_homepage',$data);
        
      
        
    }
    
    public function profile()
    {
        
        if(!($this->session->userdata('a_id')))
        redirect('admin_login_controller/index','refresh');
        
        $data = array();
        $this->load->model('loginModel');
        $data['admin_infos'] = $this->loginModel->admin_details();
        //$data['admin_info'] = $this->loginModel->admin_details_info();
        $this->load->view('SuperAdmin/admin_profile',$data);
        
    }
    
     public function editusers($id) {

        $this->load->model('loginModel', 'editusers');
        $result = $this->editusers->find_user($id);

        $this->load->view('SuperAdmin/edit_info', ['article' => $result]);
    }
        
    public function updateInfo($articleId) {

        $this->form_validation->set_rules('user_name', 'User Name', 'alpha');
        $this->form_validation->set_rules('email', 'Email');
        $this->form_validation->set_rules('first_name', 'First Name', 'alpha');
        $this->form_validation->set_rules('last_name', 'Last Name', 'alpha');
        $this->form_validation->set_rules('user_status', 'Status');
        $this->form_validation->set_error_delimiters('<div class = "text-danger">', '<div>');
        if ($this->form_validation->run()) {
            $post = $this->input->post();
            $this->load->model('loginModel', 'updt');

            if ($this->updt->infoUpdt($articleId, $post)) {
             
                $this->session->set_flashdata('updt_msg', 'Update user Successfully');
                $this->session->set_flashdata('updt_msg_class', 'alert-info');

                redirect('Super_admin/homeAdmin');
                //echo 'Insert Successfully';
                //echo 'ok';
            } else{
                
                $this->session->set_flashdata('updt_msg', 'User not updated,pls try again');
                $this->session->set_flashdata('updt_msg_class', 'alert-danger');
                redirect('Super_admin/homeAdmin');
                //echo 'Insert Failed';
            }
            
        } else {
            $this->load->view('SuperAdmin/edit_info');
        }
    }
    
    public function UserDecative($id)
            
    {

        $this->load->model('loginModel');
        $result = $this->loginModel->action($id);
      
        redirect('Super_admin/homeAdmin');

    }
    
    public function UserActive($id)
            
    {

        $this->load->model('loginModel');
        $result = $this->loginModel->action2($id);
     
        redirect('Super_admin/homeAdmin');
    }
    
    public function chng_password()
    {
        $data = array();
        $this->load->model('loginModel');
        $id = $this->session->userdata('a_id');
       
        $data['admin_info'] = $this->loginModel->admin_detail($id);
        $this->load->view('SuperAdmin/Change_password',$data);

    }
    
    public function paswrd_chng()
    {
        $this->form_validation->set_rules('opass', 'Password', 'required|max_length[10]');
        $this->form_validation->set_rules('npass', 'Password', 'required|max_length[10]');
        $this->form_validation->set_rules('cpass', 'Password', 'required|max_length[10]');
        
        $this->form_validation->set_error_delimiters('<div class = "text-danger">', '<div>');
        
        if($this->form_validation->run()){
            
             $post = $this->input->post();
             
             
             $post['opass'] = md5($this->input->post('opass'));
                   
                $id = $this->session->userdata('a_id');
              
                
             if($post['opass'] == $post['a_password']){
                 if($post['npass'] == $post['cpass']){
                     
                     $post['a_password'] = md5($this->input->post('npass'));
                     
                     
                $this->load->model('loginModel');
                if($this->loginModel->update_pass($id,$post)){
                $this->session->set_flashdata('chng_msg', 'Update Successfull');
                $this->session->set_flashdata('chng_msg_class', 'btn-success');
            } else {

                $this->session->set_flashdata('chng_msg', 'Update failed,pls try again');
                $this->session->set_flashdata('chng_msg_class', 'btn-danger');
            }
                  
                     
                 }
                 else{
                $this->session->set_flashdata('chng_msg', 'Your New Password and Confirm not match.');
                $this->session->set_flashdata('chng_msg_class', 'btn-danger');  
                 }
                 
             }
             else{
                $this->session->set_flashdata('chng_msg', 'Your old password not match');
                $this->session->set_flashdata('chng_msg_class', 'btn-danger');  
                 
             }
             
           redirect('Super_admin/chng_password'); 
        }
        else{
            $this->load->view('SuperAdmin/Change_password');
        }
    }

    public function adminReg()
    {
       $this->load->view('SuperAdmin/admin_reg');  
    }
    
   
    
    public function register(){
                $config = [
            'upload_path' => './upload/',
            'allowed_types' => 'gif|jpg|png',
        ];

        $this->load->library('upload', $config);


        
        $this->form_validation->set_rules('a_name', 'User Name', 'required|alpha');
        $this->form_validation->set_rules('a_email', 'Email', 'required|valid_email|is_unique[admin.a_email]');
        $this->form_validation->set_rules('a_contact','Contact', 'required|exact_length[11]|numeric');       
        $this->form_validation->set_rules('a_password', 'Password', 'required|max_length[12]');
        
              
        $this->form_validation->set_error_delimiters('<div class = "text-danger">', '<div>');

        if ($this->form_validation->run() && $this->upload->do_upload()) {

            $post = $this->input->post();
            
            $post['a_password'] = md5($this->input->post('a_password'));
            
            $data = $this->upload->data();

            $image_path = base_url("upload/" . $data['raw_name'] . $data['file_ext']);

            $post['a_pic'] = $image_path;
            
            
            
            //$post['a_status'] = 1;

            $this->load->model('loginModel');
            if ($this->loginModel->add_admin($post)) {
                $this->session->set_flashdata('admin_msg', 'Registration Successfull');
                $this->session->set_flashdata('admin_msg_class', 'alert-success');
            } else {

                $this->session->set_flashdata('admin_msg', 'Registration failed,pls try again');
                $this->session->set_flashdata('admin_msg_class', 'alert-danger');
            }
            redirect('Super_admin/adminReg');
            
        } else {
            $upload_error = $this->upload->display_errors();

            $this->load->view('SuperAdmin/admin_reg', compact('upload_error'));

            //$this->load->view('SuperAdmin/admin_reg');
        }
    }
    
    public function delete_art_info($postId)
    {
        //echo $postId;
        
        
        $this->load->model('loginModel', 'delarticle');
        if ($this->delarticle->delete_articles($postId)) {
            $this->session->set_flashdata('msg', 'delete Articles Successfully');
            $this->session->set_flashdata('msg_class', 'alert-success');


            //echo 'Insert Successfully';
            //echo 'ok';
        } else {
            $this->session->set_flashdata('msg', 'Not deleted,pls try again');
            $this->session->set_flashdata('msg_class', 'alert-danger');

            //echo 'Insert Failed';
        }
        redirect('Super_admin/homeAdmin');
    }
}
