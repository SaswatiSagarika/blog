<?php
/**
    *File name: master.blade.
    *File type: php.
    *Date of  creation:20th Feb 2017.
    *Author:mindfire solutions(saswati).
    *Purpose: this php file extends to all other files.
    *Path:D:\PHP Projects\blog and comments\blog1\resources\veiws\layouts.
    **/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="p" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
  
    <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-table.css" rel="stylesheet">
        <link href="css/form.css" rel="stylesheet">
   
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
   
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    
</head>
<body id="app-layout">
    
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url('welcome/home') ?>">Salt and Pepper</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo site_url('welcome/home') ?>">Home </a></li>
        <li ><a href="<?php echo site_url('welcome/about') ?>">About </a></li>
        <li><a href="<?php echo site_url('welcome/contact') ?>">Contact</a></li>
        
      </ul>
        
      <ul class="nav navbar-nav navbar-right">
       
        <li class="dropdown">
                   
            <li><a href="<?php echo site_url('welcome/newblogform') ?>">Add New Blog</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo site_url('post/showall') ?>">All Blogs</a></li>
            <li><a href="<?php echo site_url('welcome/demo') ?>">Demo</a></li>
          
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
     
            <script src="js/jquery-2.2.4.js"></script>
                
            <script src="js/bootstrap.js"></script>
                     <!-- jQuery (necessary for BootstrapTable's JavaScript plugins) -->
        <script src="js/bootstrap-table.js"></script>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
         <script src="js/bootstrap.js"></script>
   
     <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> 
   <script src="js/jquery.bootgrid.js"></script>
   <script src="js/jquery.bootgrid.fa.js"></script>
</body>
</html>
