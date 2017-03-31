<?php  if (! defined('BASEPATH')) { exit('No direct script access allowed');
       }
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
