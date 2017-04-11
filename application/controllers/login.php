<?php if (! defined('BASEPATH')) { exit('No direct script access allowed');
}
/**
    *File name: Comment.
    *File type: php.
    *Date of  creation:20th Feb 2017.
    *Author:mindfire solutions.
    *Purpose: this php file contains different functions to be called from controller file.
    *Path:D:\PHP Projects\blog and comments\blog1\app.
    **/
class Comment extends CI_Controller
{
     public function __construct()
    {       
        parent::__construct(); 
        $this->load->library(array('FilemakerConnect'));   
        
    }
}