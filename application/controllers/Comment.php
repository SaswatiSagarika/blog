<?php if (! defined('BASEPATH')) { exit('No direct script access allowed');
}
 


class Comment extends CI_Controller
{



    protected $fm, $main_menu, $current_only;

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
   * @return Response
   
*/
    public function addnewcomments()    
    {
         $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'E-Mail Address', 'required');
        $this->form_validation->set_rules('comment', 'Message', 'required');

         // $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');  
        if($this->form_validation->run() == true) { 
            $this->load->model('commentmodel');
            $id =$this->input->post('id');
            $name =$this->input->post('name');
            $email =$this->input->post('email');
            $comment =$this->input->post('comment');

            $data=$this->commentmodel->createnewcomments($id, $name, $email, $comment);
            echo json_encode($data);
        
        } else {
            $data = array(
            'error'=>'True',
            'name' => form_error('name'),
            'email' => form_error('email'),
            'comment' => form_error('comment')
            );
            echo json_encode($data);
        
        }
  
    
    }

}
