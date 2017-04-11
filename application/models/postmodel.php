<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}
/**
    *File name: Postmodal.
    *File type: php.
    *Date of  creation:20th March 2017.
    *Author:mindfire solutions.
    *Purpose: this php file contains functions to be called in controller file.
    *Path:D:\PHP Projects\blog and comments\blog1\app.
    **/
class Postmodel extends CI_Model
{
    public $db;
    public $date;
//calling the FM constuctor class
    public function __construct()
    {

        parent::__construct();
        $this->load->helper('validDate');
    }

    /**
    *
    *
     * create new blogs.
     *
     * @param int $name,$subject, $content
     *
     * @return $records

    */
    
    public function createnewpost($name, $subject, $content)
    {
        $this->db = $this->filemakerconnect->getFMInstance();
//add new reocrd
        $record = $this->db->newAddCommand('blogger');
        $record -> setField('AuthorName', $name);
        $record -> setField('SubjectTitle', $subject);
        $record -> setField('Subject', $content);
        $result = $record->execute();
    }
    
    /**
    *
    *  Show all records present in the DB with pagination and alos perform search opration on them.
    *
    * @param String $search - string needed to be searched in the DB
    * @param Int    $Skip   -contain the pageno value
    *
    * @return records.

    */
    
    public function showall($skip, $search)
    {
        
        $this->db = $this->filemakerconnect->getFMInstance();
//check if serach is empty
        if (!empty($search)) {
            $findCommand1 = $this->db->newFindRequest('Blogger');
            $findCommand1->addFindCriterion('AuthorName', $search);
            $findCommand2 = $this->db->newFindRequest('Blogger');
            $findCommand2->addFindCriterion('SubjectTitle', $search);
            $findCommand3 = $this->db->newFindRequest('Blogger');
            $findCommand3->addFindCriterion('Day', $search);
            $findCommand4 = $this->db->newFindRequest('Blogger');
            $findCommand4->addFindCriterion('Year', $search);
            $findCommand5 = $this->db->newFindRequest('Blogger');
            $findCommand5->addFindCriterion('Month', $search);
            if (true === validateDate($search)) {
                $search = isValidDate($search);
                $findCommand6 = $this->db->newFindRequest('Blogger');
                $findCommand6->addFindCriterion('Date', $search);
            }
        //perform compound find
            $record = $this->db->newCompoundFindCommand('Blogger');
            $record->add(1, $findCommand1);
            $record->add(2, $findCommand2);
            $record->add(3, $findCommand3);
            $record->add(4, $findCommand4);
            $record->add(5, $findCommand5);
            if (true === validateDate($search)) {
                $record->add(6, $findCommand6);
            }
            
            $record->addSortRule('BlogId', 1, FILEMAKER_SORT_ASCEND);
        } else {
            $record = $this->db->newFindAllCommand('Blogger');
        }
        //assigning the max no records present in the page
        $max=3;
        if (!isset($skip)) {
            $skip = 0;
        }
        //set the range for the pagination
        $record->setRange($skip, $max);
        $result = $record->execute();
//check if any error
        $error = $this->filemakerconnect->isError($result);
        if (!$error) {
            $record_count = $result->getFoundSetCount();
            echo $this->filemakerconnect->isError($record_count);
        //echo $record_count;
            $records = $result->getRecords();
            return [$records,$record_count];
        } else {
            return [$result,0];
        }
    }

    /**
    *
    *
    *  Show the selected record along with its comments
    *
    * @param String                                   $id - contain id variable .
    * @param $comments - comments searched from the DB
    * @param $records -record searched from the Db
    *
    * @return records and $comments.

    */
    public function readpost($id)
    {
        $this->db = $this->filemakerconnect->getFMInstance();
        $record = $this->db->newFindCommand('blogger');
//search the record by id
        $record->addFindCriterion('BlogId', $id);
        $result = $record->execute();
        if ($this->filemakerconnect->isError($result)) {
            echo $result->getMessage();
        } else {
            $records = $result->getRecords();
            foreach ($records as $record) {
            //get the records from the portal
                 $comments = $record->getRelatedSet('Blog_Comments__BlogId');
            }
            //if no comments are present for the blog
            if ($this->filemakerconnect->isError($comments)== true) {
                $comments = 0;
            }
            
            return [$records, $comments];
        }
    }
    /**
    *
    *
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
//deleted the record by id
        $record = $this->db->newDeleteCommand('blogger', $id);
        $result = $record->execute();
    }
    
    /**
    *
    *
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
        foreach ($records as $record) {
            $record -> setField('AuthorName', $name);
            $record -> setField('SubjectTitle', $subject);
            $record -> setField('Subject', $content);
            $record->commit();
        }
            
        return $records;
    }
    
    /**
    *
    *
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
//search the record by id
            $record->addFindCriterion('BlogId', $id);
        $result = $record->execute();
        $records = $result->getRecords();
        return $records;
    }
}
