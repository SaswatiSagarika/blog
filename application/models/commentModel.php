<?php if (! defined('BASEPATH')) { exit('No direct script access allowed');
}

class Commentmodel extends CI_Model
{



    public $db;


    public function __construct()
    {

        parent::__construct();
        // $this->load->library('FilemakerConnect');
        
    }
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
              
                $resultsarray['CommentId'] = $result->getField('CommentId');
                    $resultsarray['BlogId'] = $result->getField('BlogId');
                    $resultsarray['CommenterName'] = $result->getField('CommenterName');
                    $resultsarray['CommenterEmail'] = $result->getField('CommenterEmail');
                    $resultsarray['CommenterMessage'] = $result->getField('CommenterMessage');
                    $resultsarray['CommentDate'] = $result->getField('CommentDate');
                    $resultsarray['CommentTime'] = $result->getField('CommentTime');
        
        }      
             
                    return $resultsarray;  
    
    }

}
