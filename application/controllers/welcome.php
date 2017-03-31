<?php if (! defined('BASEPATH')) { exit('No direct script access allowed');
}

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
    public function demo()
    {
        $this->load->view('demo/headerfile');
        $this->load->view('demo/nav-bar');
        $this->load->view('demo/body');
    }
    public function about()
    {
        $this->load->view('blogassests/headerfile');
         $this->load->view('blogassests/nav-bar');
        $this->load->view('about');
    }
    public function contact()
    {
        $this->load->view('blogassests/headerfile');
         $this->load->view('blogassests/nav-bar');
        $this->load->view('contact');
    }
    public function newblogform()
    {
        $this->load->view('blogassests/headerfile');
         $this->load->view('blogassests/nav-bar');
        $this->load->view('newblogform');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */