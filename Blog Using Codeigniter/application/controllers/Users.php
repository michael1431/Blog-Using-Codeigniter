<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends My_controller{
    //put your code here
    
     public function index() {
         log_message('error', 'error msg in this line');
         
         log_message('debug', 'debug msg in this line');
         
         log_message('info', 'info msg in this line');
         $this->load->model('loginmodel','ar');
         $this->load->library('pagination');
         $config=[
        'base_url' => base_url('users/index'),
        'per_page' =>2,
        'total_rows' => $this->ar->all_articles_count(),
        'full_tag_open'=>"<ul class='pagination'>",
                   'full_tag_close'=>"</ul>",
                   'next_tag_open' =>'<li class="page-item"><a class="page-link">',
                   'next_tag_close' =>'</a></li>',
                   'prev_tag_open' =>'<li><a class="page-link">',
                   'prev_tag_close' =>'</a></li>',
                   'num_tag_open' =>'<li><a class="page-link">',
                   'num_tag_close' =>'</a></li>',
                   'cur_tag_open' =>"<li class='active'><a class='page-link'>",
                   'cur_tag_close' =>"</a></li>"

            
 ];


  $this->pagination->initialize($config);
  $articles=$this->ar->all_articleList($config['per_page'],$this->uri->segment(3));

  $this->load->view('Users/articleList',compact('articles'));
    }
    
}
