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
        // $this->load->library('FileMaker');
    
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

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');

         $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if($this->form_validation->run() == true) {
            $name =$this->input->post('name');
            $subject =$this->input->post('subject');
            $content =$this->input->post('content');
          
            $this->postmodel->createnewpost($name, $subject, $content);
            
            redirect('post/showall', 'refresh');
  
            
        }
        else{
            
            $this->load->view('blogassests/headerfile');
            $this->load->view('blogassests/nav-bar');
            $this->load->view('newblogform');
            
        }

    }
    public function newblogform()    
    {
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
           
           
        $search = $this->input->get('search');
        $skip= $this->input->get('skip');
          
        $data['resources']=$this->postmodel->showall($skip, $search);
        echo $this->filemakerconnect->isError($data['resources']);
        
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
        $id= $this->uri->segment(3);
        $data['resources']=$this->postmodel->readpost($id);
        $records['resources1']= $data['resources']['0'];
        $records['resources2'] =$data['resources']['1'];
        // $this->filemakerconnect->dd($comments);
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
        $id= $this->uri->segment(3);
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

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        $id =$this->input->post('id');
        if($this->form_validation->run() == true) {
            $id =$this->input->post('id');
            $name =$this->input->post('name');
            $subject =$this->input->post('subject');
            $content =$this->input->post('content');
            $this->filemakerconnect->dd($content);
            $result=$this->postmodel->editpost($id, $name, $subject, $content);  
          
            redirect('post/showall', 'refresh');
            
        }
        else{
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
            redirect('post/editblogform/$id');
            
        }

    
    }

}  
    ?>
