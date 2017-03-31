<?php if (! defined('BASEPATH')) { exit('No direct script access allowed');
}
 /**
    *File name: Post.
    *File type: php.
    *Date of  creation:20th Feb 2017.
    *Author:mindfire solutions.
    *Purpose: this php file contains functions to be called from controller file.
    *Path:D:\PHP Projects\blog and comments\blog1\app.
    **/


class Post extends CI_Controller
{
    protected $fm, $main_menu, $current_only;
    
    /**
    *  Calls the filemaker parent class
    */
    public function __construct()
    {
        parent::__construct(); 
        $this->load->library(array('FilemakerConnect'));   
       
    }
  
    /**
    * 
    * 
    * Show the form for creating a new resource.
    *
    * @return to showall page
    
    */
    public function createnew()    
    {         
        $this->load->model('postmodel');
        $this->load->library('form_validation');
        //array for validation
         $config = array(
               array(
                     'field'   => 'name', 
                     'label'   => 'Name', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'subject', 
                     'label'   => 'Subject', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'content', 
                     'label'   => 'Content', 
                     'rules'   => 'required'
                  ),   
              
            );
       
        $this->form_validation->set_rules($config);
       //if any error present
         $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        //if valid
        if($this->form_validation->run() == true) {
            $name =$this->input->post('name');
            $subject =$this->input->post('subject');
            $content =$this->input->post('content');
          //create new record
            $this->postmodel->createnewpost($name, $subject, $content);
            
            redirect('post/showall', 'refresh');
        } else {
            
            $this->load->view('blogassests/headerfile');
            $this->load->view('blogassests/nav-bar');
            $this->load->view('newblogform');
            
        }

    }
    
    /**
     * Display the new blog add page.
     *
     */
    public function newblogform()    
    {
        //show the new add form
        $this->load->view('blogassests/headerfile');
        $this->load->view('blogassests/nav-bar');
        $this->load->view('newblogform');
    
    }
    
    /**
     * Display the list of blog with pagination.
     *
     * @param  int  $skip
     * @return $records
     */
    public function showall()
    {

        $this->load->model('postmodel');
           
         //get the value from the url
        $search = $this->input->get('search');
        $skip= $this->input->get('skip');
        //perform showall
        $data['resources']=$this->postmodel->showall($skip, $search);
        echo $this->filemakerconnect->isError($data['resources']);
        //retrive the record array and comment array differently
        $records['resources1']= $data['resources']['0'];
        $records['resources2'] =$data['resources']['1'];
       
         //$this->filemakerconnect->dd($records['resources1']);
        $this->load->view('blogassests/headerfile');
        $this->load->view('blogassests/nav-bar');
        $this->load->view('Showall', $records);
    
    }
    
     /**
     * go to specified blog from storage in the update form.
     *
     * @param  int  $id
     * @return $records
     */
    public function editblogform()
    {

        $this->load->model('postmodel');
          //get the id from the url
        $id= $this->uri->segment(3);
        $data['resources']=$this->postmodel->getblogdetailsbyId($id);

        $this->load->view('blogassests/headerfile');
        $this->load->view('blogassests/nav-bar');
        $this->load->view('filemaker/editblog', $data);

    }
    
    /**
     * delete form  to conform if they want to delete the blog
     *
     * @param  int  $id
     * @return records
     */
    public function deleteblogform()
    {

        $this->load->model('postmodel');
          //get the id from the url
        $id= $this->uri->segment(3);
        
        $data['resources']=$this->postmodel->getblogdetailsbyId($id);
        $this->load->view('blogassests/headerfile');
        $this->load->view('blogassests/nav-bar');
        $this->load->view('filemaker/deleteblog', $data);

    }
    
    /**
     * Store a newly created resource in storage.
     *
     *
     * @return Records and comments
     */
    public function readblogform()
    {
        $this->load->model('postmodel');
          //get the id from the url
        $id= $this->uri->segment(3);
          
        $data['resources']=$this->postmodel->readpost($id);
        
        //retrive the record array and comment array differently
        $records['resources1']= $data['resources']['0'];
        $records['resources2'] =$data['resources']['1'];
        
        $this->load->view('blogassests/headerfile');
        $this->load->view('blogassests/nav-bar');
        $this->load->view('filemaker/readblog', $records);

    }
    
    /**
    * 
    * 
    * Remove the specified blog from storage.
    *
    * @param  int $id
    * @return Response
    
    */
    public function destroyblog()    
    {
        $this->load->model('postmodel');
        //get the id from the url
        $id= $this->uri->segment(3);
        //delete by id
        $records=$this->postmodel->deletepost($id);
        redirect('post/showall', 'refresh');
    
    }
    
    /**
    * 
    * 
    * Show the form for editing the blog resource.
    *
    * @param  int $id
    * @return to list page
    
    */
    public function editrecordblog()    
    {
        $this->load->model('postmodel');

        $this->load->library('form_validation');
        //array to perform validation
        $config = array(
               array(
                     'field'   => 'name', 
                     'label'   => 'Name', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'subject', 
                     'label'   => 'Subject', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'content', 
                     'label'   => 'Content', 
                     'rules'   => 'required'
                  ),   
              
            );
       
        $this->form_validation->set_rules($config);
       
        $id =$this->input->post('id');
        
        if($this->form_validation->run() == true) {
           //if valid
            $id =$this->input->post('id');
            $name =$this->input->post('name');
            $subject =$this->input->post('subject');
            $content =$this->input->post('content');
            $this->filemakerconnect->dd($content);
            $result=$this->postmodel->editpost($id, $name, $subject, $content);  
          
            redirect('post/showall', 'refresh');
            
        }
        else{
            //if not valid
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
            redirect('post/editblogform/$id');
            
        }
    }
}  
?>
