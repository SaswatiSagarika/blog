<?php  if (! defined('BASEPATH')) { exit('No direct script access allowed');
       }
       /**
    *File name: Validate_helper.
    *File type: php.
    *Date of  creation:28th March 2017.
    *Author:mindfire solutions.
    *Purpose: this php file contains different functions validate and match the dat format.
    *Path:D:\PHP Projects\blog and comments\blog1\app\HTTP\Controller.
    **/
if (! function_exists('isValidDate')) {
    function isValidDate($date)    
    {
        $date=DateTime::createFromFormat('m/d/Y', $date);
        $date = $date->format('m/d/Y');
        return $date;
      
    }

}

if (! function_exists('validateDate')) {
    function validateDate($date)    
    {
        $d = DateTime::createFromFormat('m/d/Y', $date);
        return $d && $d->format('m/d/Y') === $date;
    
    }

}
