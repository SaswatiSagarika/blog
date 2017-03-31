<?php if (! defined('BASEPATH')) { exit('No direct script access allowed');
}
/**
    *File name: welcome.
    *File type: php.
    *Date of  creation:10th May 2016.
    *Author:mindfire solutions.
    *Purpose: this php file contains different functions to be called in routes file.
    *Path:D:\PHP Projects\blog and comments\blog1\app\HTTP\Controller.
    **/
class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -  
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
  *
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    /**
     
     * @shows the welcomepage
     */
    public function index()
    {       
        $this->load->view('blogassests/headerfile');
         $this->load->view('blogassests/nav-bar');
        $this->load->view('welcomepage');
    }
    
    
    public function home()
    {
        $this->load->view('blogassests/headerfile');
              $this->load->view('blogassests/nav-bar');
        $this->load->view('welcomepage');
    }
     /**
     
     * @shows the about page
     */
    public function about()
    {
        $this->load->view('blogassests/headerfile');
         $this->load->view('blogassests/nav-bar');
        $this->load->view('about');
    }
     /**
     
     * @shows the Contactpage
     */
    public function contact()
    {
        $this->load->view('blogassests/headerfile');
         $this->load->view('blogassests/nav-bar');
        $this->load->view('contact');
    }
     /**
     
     * @shows the newblogform
     */
    public function newblogform()
    {
        $this->load->view('blogassests/headerfile');
         $this->load->view('blogassests/nav-bar');
        $this->load->view('newblogform');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */