<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends My_controller {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function welcome() {
        // session r kaj hoise ekane
        if (!$this->session->userdata('id'))
            return redirect('login/index');

        $this->load->model('loginModel', 'ar');
        $this->load->library('pagination');
        
        /*
         *  pagination r jnno used hoiche
         */

        $config = [
            'base_url' => base_url('Admin/welcome'),
            'per_page' => 2,
            'total_rows' => $this->ar->num_rows(), // total number of rows return krbe
            'full_tag_open' => "<ul class='pagination'>",
            'full_tag_close' => "</ul>",
            'next_tag_open' => '<li class="page-item"><a class="page-link">',
            'next_tag_close' => '</a></li>',
            'prev_tag_open' => '<li><a class="page-link">',
            'prev_tag_close' => '</a></li>',
            'num_tag_open' => '<li><a class="page-link">',
            'num_tag_close' => '</a></li>',
            'cur_tag_open' => "<li class='active'><a class='page-link'>",
            'cur_tag_close' => "</a></li>"
        ];

        $this->pagination->initialize($config); 

        $article = $this->ar->allarticles($config['per_page'], $this->uri->segment(3));
        $this->load->view('Admin/dashboard', ['articles' => $article]);
    }

    public function adduser() {
        //session r kaj hoise ekhane
        if (!$this->session->userdata('id'))
            return redirect('login/index');
        
        $this->load->view('Admin/add_article');
    

    }

    public function editarticles() {
        $id = $this->input->post('article_id');
        $this->load->model('loginModel', 'editarticle');
        $result = $this->editarticle->find_article($id);
//       echo '<pre>';
//       print_r($result);
//       //echo $id;
        $this->load->view('Admin/edit_article', ['article' => $result]);
    }

    public function updateArticle($articleId) {

//         echo $articleId;
//         exit();

        if ($this->form_validation->run('add_article_rules')) {
            $post = $this->input->post();
            $this->load->model('loginModel', 'update');

            if ($this->update->updatearticles($articleId, $post)) {
                $this->session->set_flashdata('msg', 'Update Articles Successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');


                //echo 'Insert Successfully';
                //echo 'ok';
            } else {
                $this->session->set_flashdata('msg', 'Articles not updated,pls try again');
                $this->session->set_flashdata('msg_class', 'alert-danger');

                //echo 'Insert Failed';
            }
            redirect('Admin/welcome');
        } else {
            $this->load->view('Admin/edit_article');
        }
    }

    public function delarticles() {
        $id = $this->input->post('article_id');
        $this->load->model('loginModel', 'delarticle');
        if ($this->delarticle->delete_articles($id)) {
            $this->session->set_flashdata('msg', 'delete Articles Successfully');
            $this->session->set_flashdata('msg_class', 'alert-success');


            //echo 'Insert Successfully';
            //echo 'ok';
        } else {
            $this->session->set_flashdata('msg', 'Not deleted,pls try again');
            $this->session->set_flashdata('msg_class', 'alert-danger');

            //echo 'Insert Failed';
        }
        redirect('Admin/welcome');
    }
    
    public function view_full_articles($id) 
    {
//        echo $id;
//        exit();
//        
        $this->load->model('loginModel', 'viewAricles');
        $result = $this->viewAricles->show_article_by_click($id);
        
        $this->load->view('Users/View_articles',['view_article'=>$result]);
        
    }

    public function userValidation() {
        $config = [
            'upload_path' => './upload/',
            'allowed_types' => 'gif|jpg|png',
        ];

        $this->load->library('upload', $config);

        if ($this->form_validation->run('add_article_rules') && $this->upload->do_upload()) {
            $post = $this->input->post();

            $data = $this->upload->data();

            $image_path = base_url("upload/" . $data['raw_name'] . $data['file_ext']);

            $post['image_path'] = $image_path;

            date_default_timezone_set('Asia/Dhaka');
            $post['created_at'] = date('h:i:sa') . '(' . date('d-m-y') . ')';

            $this->load->model('loginModel', 'useradd');
            if ($this->useradd->add_articles($post)) {
                $this->session->set_flashdata('msg', 'Insert Articles Successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'Articles not added,pls try again');
                $this->session->set_flashdata('msg_class', 'alert-danger');
            }
            redirect('Admin/welcome');
        } else {

            $upload_error = $this->upload->display_errors();

            $this->load->view('admin/add_article', compact('upload_error'));
        }
    }

    public function logout() {

        $this->session->unset_userdata('id');
        redirect('login/index', 'refresh');
    }

    public function register() {
        $this->load->view('Admin/register');
    }

    public function sendemail() {
        $this->form_validation->set_rules('user_name', 'User Name', 'required|alpha');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[12]');
        $this->form_validation->set_rules('first_name', 'First Name', 'required|alpha');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|alpha');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');

        $this->form_validation->set_error_delimiters('<div class = "text-danger">', '<div>');

        if ($this->form_validation->run()) {

            $post = $this->input->post();
            $post['password'] = base64_encode($this->input->post('password'));
            $post['user_status'] = 1;

            $this->load->model('loginModel');
            if ($this->loginModel->add_user($post)) {
                $this->session->set_flashdata('user_msg', 'User Added Successfully');
                $this->session->set_flashdata('user_msg_class', 'alert-success');
            } else {

                $this->session->set_flashdata('user_msg', 'User not added,pls try again');
                $this->session->set_flashdata('user_msg_class', 'alert-danger');
            }
            redirect('Admin/register');
            $this->load->library('email');
            $this->email->from(set_value('uemail'), set_value('fname'));
            $this->email->to("emonchy35@gmail.com");
            $this->email->subject("Registration Greeting...");

            $this->email->message("Thank you for registration");
            $this->email->set_newline("\r\n");
            $this->email->send();

            if (!$this->email->send()) {

                show_error($this->email->print_debugger());
            } else {

                echo 'Your email has been sent!';
            }
        } else {
            $this->load->view('Admin/register');
        }
    }

}
