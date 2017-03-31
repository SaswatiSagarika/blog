<?php if (! defined('BASEPATH')) { exit('No direct script access allowed');
}
/**
+--------------------------------------------------------------------
| File    : BootGridWrapper.php
| Path    : /application/libraries/BootGridWrapper.php
| Purpose : Connects to filemaker db
| Created : 20-Oct-2015
| Author  :  Mindfire Solutions.
| Comments :
+--------------------------------------------------------------------
*/


/**
* It contains methods used for connecting magento SOAP api
*/
require_once 'Filemaker/FileMaker.php';

class FilemakerConnect
{
    /**
    * FileMaker PHP API Object
    */
    public $db;
    public $ci;
    /**
    * Used to initialize objects
    *
    * @param  String $dbConfig - dbconfig filename
    * @return Object - Filemaker connection object
    */
    public function __construct()
    {   

        $this->db = new FileMaker('Blog.fmp12', '172.16.9.62', 'Admin', 'mindfire');
       
    }
/**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getFMInstance()
    {
         return $this->db;
    }
    /**
     * print the data provided
     *
     * @return $data
     */
    public function dd($data)
    {

        echo '<pre>';
        print_r($data);
    }
    /**
     * perform iserror method.
     *
     * 
     */
    public function isError($data)
    {

        $ci = new FileMaker();

        if(Filemaker::isError($data)) {
            return true;
        }

        return false;

    }

}
