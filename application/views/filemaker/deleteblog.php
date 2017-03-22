<?php
/**
    *File name: delete.blade.
    *File type: php.
    *Date of  creation:20th Feb 2017.
    *Author:mindfire solutions.
    *Purpose: this php file  get id and delete the student record.
    *Path:D:\PHP Projects\blog and comments\blog1\resources\veiws\pages.
    **/
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>
    Delete
</title>
<!-- Main Content -->
</head>
<body id="app-layout">
<div class="container">
    <div class="col-md-12">
        
        <div class="panel">
            <div class="panel-heading">
                                   <h1>Delete this</h1>
                            </div>
                
            <div class="panel-body">
            <form class="myform" id="myform" action="" method="">
           
                      <?php foreach($resources as $record): ?>
                      
                        <?php $BlogID=$record->getField('BlogId'); ?>

                        <div class="error"></div>
                        <h3 class="alert alert-error">Are you sure to delete you want to delete this Blog ?</h3>
                        <div id="buttons" style="padding-left:20%">
                            <a  class="btn btn-danger" href="<?php echo site_url("post/destroyblog/".$BlogID)?>">Yes</a>
                            <a class="btn btn-warning" href="<?php echo site_url("/post/showall")?>">No</a>
                                 <?php endforeach; ?>
                        </div>
                    </form>
            	<div>
                   
                </div>
            </div>
   	</div>
    </div> 
</div>
</body>
</html>  