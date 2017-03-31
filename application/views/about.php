<?php
/**
    *File name: about.
    *File type: php.
    *Date of  creation:20th march 2017.
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
<body id="app-layout"><div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="jumbotron">
                
                <h1>About Me</h1>
                <p>This is What I do </p>
            </div></div></div>
                <div class="panel-body">
                   <div class="row">
                   <div class ="col-md-2">
                    <img src="css\image\download.jpg" class="img-responsive img-circle margin" align="middle" alt="Bird" width="150" height="450">
                   </div>
                    <div class="col-md-10">
                    <p>
                    
<b>Harry Houdini</b> (born Erik Weisz, later Ehrich Weiss or Harry Weiss; March 24, 1874 – October 31, 1926) was a Hungarian-American illusionist and stunt performer,
noted for his sensational escape acts.He first attracted notice in vaudeville in the US and then as "Harry Handcuff Houdini" on a tour of Europe, where he challenged 
police forces to keep him locked up. Soon he extended his repertoire to include chains, ropes slung from skyscrapers, straitjackets under water, and having to escape 
from and hold his breath inside a sealed milk can with water in it.
In 1904, thousands watched as he tried to escape from special handcuffs commissioned by London's Daily Mirror, keeping them in suspense for an hour. Another stunt saw
him buried alive and only just able to claw himself to the surface, emerging in a state of near-breakdown. While many suspected that these escapes were faked, Houdini
presented himself as the scourge of fake spiritualists. As President of the Society of American Magicians, he was keen to uphold professional standards and expose fraudulent
artists. He was also quick to sue anyone who imitated his escape stunts.
Houdini made several movies, but quit acting when it failed to bring in money. He was also a keen aviator, and aimed to become the first man to fly a plane in Australia.   
                
                    </p>
                   <a class="btn btn-primary" href="{{ url('/list') }}" align="middle">
                                    <i class="fa fa-btn fa-sign-out"></i>Back
                                </a>        
                </div>
                </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
      <script src="js/jquery-2.2.4.js"></script>
                <script src="js/jquery.blockUI.js"></script>
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
