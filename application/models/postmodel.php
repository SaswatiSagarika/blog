<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Postmodel extends CI_Model{

	public $db;


	public function __construct(){

		parent::__construct();
		// $this->load->library('FilemakerConnect');
		
  	}

  	/**
	 * create new blogs.
	 *
	 * @param  int  $name,$subject, $content
	 * 
	 * @return $records
	 */
        public function createnewpost($name, $subject, $content)
        {      
    		$this->db = $this->filemakerconnect->getFMInstance();
            $record = $this->db->newAddCommand('blogger');
            $record -> setField('AuthorName', $name);
            $record -> setField('SubjectTitle', $subject);
            $record -> setField('Subject', $content);
            $result = $record->execute();
         
        }
        
	public function showall(){

		
		$this->db = $this->filemakerconnect->getFMInstance();
		$record = $this->db->newFindAllCommand('Blogger');
		$result =$record->execute();
		$records = $result->getRecords();
		
		return $records;
	}

        /**
        *  Show the selected record along with its comments
        *
        * @param String $id - contain id variable .
        * @param  $comments - comments searched from the DB
        * @param  $records -record searched from the Db
        * 
        * @return records and $comments.
        */
        public function readpost($id)
        {
      		$this->db = $this->filemakerconnect->getFMInstance(); 
            $record = $this->db->newFindCommand('blogger');
            $record->addFindCriterion('BlogId', $id);
            
            $result = $record->execute();
            $records = $result->getRecords();
            
            foreach($records as $record){
                
                $comments = $record->getRelatedSet('Blog_Comments__BlogId');
                        
                
            }
             // $this->filemakerconnect->dd($records);
           return [$records, $comments];
                    
        }
        /**
        *  delete the selected record
        *  
        * @param String $request - contain id variable .
        * @Param $id -releted record is deleted based on it
        * 
        * @return records.
        */
        public function deletepost($id)
        {
    		$this->db = $this->filemakerconnect->getFMInstance(); 
            $record = $this->db->newDeleteCommand('blogger',$id);
            $result = $record->execute();
           
           
        
        }
        /**
            *  save the fields where changes are made
            *
            * @param String $request - contain id variable.
            * 
            */
        public function editpost($id, $name, $subject, $content)
        {
    		$this->db = $this->filemakerconnect->getFMInstance();
            $record = $this->db->newFindCommand('blogger');
            
            //search the record by id
            $record->addFindCriterion('BlogId', $id);
            $result = $record->execute();
    
            $records =$result->getRecords();
            //save the changes made in the edit page
            foreach($records as $record){
                
                $record -> setField('AuthorName',$name );
                $record -> setField('SubjectTitle', $subject);
                $record -> setField('Subject', $content);
                $record->commit();
            
            }
            
            return $records;

        }
        /**
        *  get the records details based on Id
        *
        * @param String $request - contain id variable .
        * @Param $id -releted record is searched based on it
        * 
        * @return records.
        */
		public function getblogdetailsbyId($id)
        {
            $this->db = $this->filemakerconnect->getFMInstance(); 
            $record = $this->db->newFindCommand('Blogger');
            $record->addFindCriterion('BlogId', $id);
            $result = $record->execute();
            $records = $result->getRecords();
           //   $error = $this->filemakerconnect->isError($records);
           // $this->filemakerconnect->dd($error);
           return $records;
        
        }
}