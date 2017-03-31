<?php
/**
    *File name: welcomepage.
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
<body id="app-layout">
    
<div class="container">
	<div class="row">
            <div class="col-md-12 ">
                    
                <div class="jumbotron">
                    <h1>Welcome To My Blog</h1>
                    <p>Thank you for visiting my tets blog </p>
                    <p><a class="btn btn-primary btn-lg" href="<?php echo site_url('post/showall') ?>" role="button">Popular Post</a></p>
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
