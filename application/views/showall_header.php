<?php
/**
    *File name: ShowAll.
    *File type: php.
    *Date of  creation:20th March 2017.
    *Author:mindfire solutions(saswati).
    *Purpose: this php file extends to all other files.
    *Path:D:\PHP Projects\blog and comments\blog1\resources\veiws\layouts.
    **/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Archives</title>
</head>
 
<body id="app-layout">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div  class="panel-heading">
                    <div  class="jumbotron">
                        <h1>Archives</h1>
                        <p>This is What I do </p>
                    </div>
                     <form class="myform" action="<?php echo site_url('/post/showall')?>" method="GET">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" id="token" value="<?php echo $this->security->get_csrf_hash(); ?>"> 
                        <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <div class="input-group">
                            <input type="text" class="form-control" name="search" id="search" placeholder="Search by Title, Author, Date">
                            <span class="input-group-btn">
                              <button class="btn btn-default" type="submit">Go!</button>
                            </span>
                          </div>
                        </div>
                        </div>
                    </form>
                </div>
                <div class="panel-body">
                 
                <?php
                if(is_array($resources1)) :
                               
                    foreach($resources1 as $record):
                       
                        ?>
                    <div class="panel panel-primary">
                        <div style="height: 54px;"class="panel-heading">
                            <p hidden><?php $BlogID = $record->getField('BlogId');?></p>
                           <p class="panel-title pull-left"><?php echo $record->getField('SubjectTitle')?></p>
                            <p hidden></p>