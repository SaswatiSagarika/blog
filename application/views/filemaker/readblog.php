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

    <title>Read blog in details</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
     <link href="{{URL::asset('css/bootstrap-table.css')}}" rel="stylesheet">

    <link href="{{URL::asset('css/master.css')}}" rel="stylesheet">
    <!-- Styles -->
    
   
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>


<div class="container">
    <div class="row">
        <?php foreach($records as $record):?>
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="jumbotron">
                        <h1><?php echo $record->getField('SubjectTitle')?></h1>
                    </div>
                 </div>
                
                <div class="panel-body">
                   <p hidden><?php echo $record->getField('BlogId')?></p>
                            <p><?php echo $record->getField('Subject')?></p>
                            <p><i> by </i> <?php echo $record->getField('AuthorName')?> <i> on </i><?php echo $record->getField('Date')?></p>
                            <button  class="btn btn-Primary" href="{{ url('/list') }}">
                                    <i class="fa fa-btn fa-sign-out"></i>Back
                            </button>
                </div>
                    
            </div>
        </div>
        <?php endforeach;?>
    </div>
    <hr>
    <div class="row">
         <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Add New Comment </h3>
                </div>    
                <div class="panel-body">
                   <div class="row">
                        <div class="col-sm-12" id="errorDiv">
                          
                        </div>
                    
                        <div>
                            <form class="myform" id="myform" action="" method="">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $record->getField('BlogId')?>">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Name</label>
         
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="name" id="name">
                                        
                                     </div>
                                 </div>
                            <br>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">E-Mail Address</label>
         
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" name="email" id="email">
         
                                       
                                    </div>
                                </div>
                            <br>                      
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Message</label>
                                    <div class="col-md-8">
                                        <Textarea type="text" rows="8" class="form-control" name="comment" id="comment"></textarea>
                                        
                                    </div>
                                </div>
                                 
                            <br>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="button" class="btn btn-primary"  id="postbutton">
                                            comment to this commit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>        
    <br>
    <div class="row">
         <div class="col-md-12 ">
            <hr>
            <div class="panel panel-info">
            <div class="panel-heading">
            </div>
                <div class="panel-body" >
                   <div class="comment-list" id="comment-list">
                  
               <?php if ($comments == 0):?>
                    <p>No comments are available for this blog</p>
                 <?PHP else: ?>
                 <?PHP foreach($comments as $comment):?>
                    
                        <p><?php echo $comment->getField('Blog_Comments__BlogId::CommenterMessage')?></p>
                    <p><i> by </i> <?php echo $comment->getField('Blog_Comments__BlogId::CommenterName')?> <i> on </i> <?php echo $comment->getField('Blog_Comments__BlogId::CommentDate')?><i> at </i><?php echo $comment->getField('Blog_Comments__BlogId::CommentTime')?> </p>
                    <p><?php echo $comment->getField('Blog_Comments__BlogId::CommenterEmail')?></p> 
                    <hr> 
                      
                   <?php endforeach; ?>
                    <?php endif; ?>
                 
                
                </div>
                </div>
            </div>    
        </div>   
    </div>

</div>

    
    <script type="text/javascript" src="{{URL::asset('js/CreateCommentAjax.js')}}"></script>
        <script src='{{URL::asset('js/jquery-2.2.4.js')}}'></script>
    <script src='{{URL::asset('js/jquery.blockUI.js')}}'></script>
     
    <!-- jQuery (necessary for BootstrapTable's JavaScript plugins) -->
    <script src="{{URL::asset('js/bootstrap-table.js')}}"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="{{URL::asset('js/bootstrap.js')}}"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> 
   
</body>
</html>


