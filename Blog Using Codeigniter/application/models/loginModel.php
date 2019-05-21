<?php

class loginModel extends CI_Model {

    //put your code here

    /* check whether user record is valid or not.. 
     * 
     */
    public function isvalidate($username, $password) {
        /* use of active records instead of using query */

        $q = $this->db->where(['user_name' => $username, 'password' => $password,'user_status'=>1])
                ->get('users');



        if ($q->num_rows()) { /// if user row exist,then it is true
            return $q->row(); //user r full information return krbe..
        } else {
            return FALSE;
        }
    }
    
    /* check whether admin record is valid or not.. 
     * 
     */
    
    
        public function isvalidateAdmin($username, $password) {
        /* use of active records instead of using query */

        $q = $this->db->where(['a_name' => $username, 'a_password' => $password])
                ->get('admin');



        if ($q->num_rows()) { /// if user row exist,then it is true
            return $q->row(); //user r full information return krbe..
        } else {
            return FALSE;
        }
    }

    /*
     *   fetch all the records through user id...
     */

    public function allarticles($limit, $offset) {
        $id = $this->session->userdata('id');

        /* use of method chaining */

        $q = $this->db->select('*')
                ->from('articles')
                ->where(['user_id' => $id])
                ->limit($limit, $offset)
                ->get();
        return $q->result();

        /* alternative way */

//         $this->db-> select('*');
//         $this->db-> from('articles');
//         $this->db-> where(['user_id'=>$id]);
//         $this->db-> limit($limit,$offset);
//         $query_result = $this->db->get();
//         $result = $query_result->result();
//         return $result;
//                
//        
    }

    /*
     *  fetch all the records..
     */

    public function all_articleList($limit, $offset) {

        $query = $this->db->select()
                ->from('articles')
                ->limit($limit, $offset)
                ->get();


        return $query->result();
    }

    /*
     *  return all the count records through user id
     */

    public function num_rows() {
        $id = $this->session->userdata('id');
        $q = $this->db->select('*')
                ->from('articles')
                ->where(['user_id' => $id])
                ->get();
        return $q->num_rows();
    }

    /*
     *  return all the count records
     */

    public function all_articles_count() {

        $q = $this->db->select()
                ->from('articles')
                ->get();
        return $q->num_rows();
    }

    /*
     *  article insertion into database
     */

    public function add_articles($array) {
        return $this->db->insert('articles', $array);
    }

    /*
     *  user insertion into database
     */

    public function add_user($array) {

        return $this->db->insert('users', $array);
    }
    
     /*
     *  admin insertion into database
     */
    
     public function add_admin($array) {

        return $this->db->insert('admin', $array);
    }
    
     /*
     *  fetch all the records for a single admin
     */
    
    public function admin_details() 
    {
        $this->db-> select('*');
        $this->db-> from('admin');
        
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
        
        
    }
    
    public function admin_detail($id) 
    {
        $this->db-> select('*');
        $this->db-> from('admin');
        $this->db->where('a_id',$id);
        
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
        
        
    }
//    
//        public function admin_details_info() 
//    {
//        $this->db-> select('*');
//        $this->db-> from('admin');
//        
//        $query_result = $this->db->get();
//        $result = $query_result->row();
//
//        return $result;
//        
//        
//    }
    
    /*
     *  fetch all the user records
     */
    
    
    public function user_details() 
    {
        $this->db-> select('*');
        $this->db-> from('users');
        
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
        
        
    }
    
     /*
     *  this method will perform when admin deactivate the user 
     */
    
    public function action($id)
    {
       
           
         return $this->db->set('user_status',0)
                         ->where('id', $id)
                         ->update('users');
        
    }
    
     /*
     *  this method will perform when admin activate the user 
     */
    
    
    public function action2($id)
    {
           
         return $this->db->set('user_status',1)
                         ->where('id', $id)
                         ->update('users');
        
    }
    
    /*
     *  fetch all the records when user_id in artcles table and 
     *  id in user table is same,
     *  hence, this will join the both tables
     *  by using join query 
     */
    
    
    public function art_details() 
    {
        $this->db-> select('*');
        $this->db-> from('articles');
        $this->db-> join('users','users.id = articles.user_id');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
        
        
    }
    
    public function edit_info($id) 
    {
                          
         $this->db-> select('*');
         $this->db-> from('users');
         $this->db->where('id',$id);
         
       
         $query_result = $this->db->get();
         $result = $query_result->row(); ///single user show hbe..

         return $result;
        
    }
    
    /*
     *  users records fetch from db,for edit purpose
     */
    
     public function find_user($userid) {
        $q = $this->db->select('*')
                ->from('users')
                ->where('id', $userid)
                ->get();
        return $q->row();
    }
    
    /*
     *  users records update through user id
     * here array is used for rest of the columns except id in a row...
     */
    
     public function infoUpdt($articleId, Array $article) {
        return $this->db->where('id', $articleId)
                        ->update('users', $article);
    }
    
    

    /*
     *  delete articles through user id..
     */

    public function delete_articles($id) {
        return $this->db->delete('articles', ['article_id' => $id]);
    }

    /*
     *  article records fetch from db,for edit purpose
     */

    public function find_article($articleid) {
        $q = $this->db->select('*')
                ->from('articles')
                ->where('article_id', $articleid)
                ->get();
        return $q->row();
    }

    /*
     *  article records update through user id
     * here array is used for rest of the columns except id in row...
     */

    public function updatearticles($articleId, Array $article) {
        return $this->db->where('article_id', $articleId)
                        ->update('articles', $article);
    }
    
    /*
     *  this method will perform when user click on a
     *  single informaion,and then show all records
     *  releated to this info   
     */
    
    public function show_article_by_click($articleid) {
        $q = $this->db->select('*')
                ->from('articles')
                ->where('article_id', $articleid)
                ->get();
        return $q->row();
    }
    
    
     public function update_pass($id, $post) {
     
          
         return $this->db->set('a_password',$post['a_password'])
                         ->where('a_id', $id)
                         ->update('admin');
        
    }
    

}
