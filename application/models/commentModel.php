<?php if (! defined('BASEPATH')) { exit('No direct script access allowed');
}
/**
    *File name: CommentModal.
    *File type: php.
    *Date of  creation:20th March 2017.
    *Author:mindfire solutions.
    *Purpose: this php file contains different functions to be called in controller file.
    *Path:D:\PHP Projects\blog and comments\blog1\app.
    **/
class Commentmodel extends CI_Model
{
    public $db;

    public function __construct()
    {

        parent::__construct();
          
    }
    
     /**
     *create new comment with respect to the BlogId
     *@param $id
     *@param $name
     *@param $email
     *@param conent
     *
     *@param $resultarray
     *@return response(json data).
     */
    public function createnewcomments($id, $name, $email, $content)    
    {
        $this->db = $this->filemakerconnect->getFMInstance();

        $record = $this->db->newAddCommand('Comments');
        $record -> setField('BlogId', $id);
        $record -> setField('CommenterName', $name);
        $record -> setField('CommenterEmail', $email);
        $record -> setField('CommenterMessage', $content);
        $results = $record->execute();
        
        if($this->filemakerconnect->isError($results)) {
             echo $results->getMessage();
     
        }
        
        $results =$results->getRecords();

        foreach ($results as $result) {
              
            $array['CommentId'] = $result->getField('CommentId');
            $array['BlogId'] = $result->getField('BlogId');
            $array['CommenterName'] = $result->getField('CommenterName');
            $array['CommenterEmail'] = $result->getField('CommenterEmail');
            $array['CommenterMessage'] = $result->getField('CommenterMessage');
            $array['CommentDate'] = $result->getField('CommentDate');
            $array['CommentTime'] = $result->getField('CommentTime');
        
        }      
             
        return $array;  
    
    }
}
