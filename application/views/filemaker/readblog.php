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
 

    <title>Read blog in details</title>

<meta name="csrf-token" content="{{ csrf_token() }}" />
    
</head>


<div class="container">
    <div class="row">
        <?php foreach($resources1 as $record):?>
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                        <h1><?php echo $record->getField('SubjectTitle')?></h1>
                    
                 </div>
                
                <div class="panel-body">
                    <?php $BlogId=$record->getField('BlogId');?>
                   <p hidden><?php echo $record->getField('BlogId')?></p>
                            <p><?php echo $record->getField('Subject')?></p>
                            <p><i> by </i> <?php echo $record->getField('AuthorName')?> <i> on </i><?php echo $record->getField('Date')?></p>
                            <button  class="btn btn-Primary" href="<?php echo site_url("/post/showall")?>">
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
                                <?php
                                echo form_open('', array('id'=>'myform', 'class'=>'myform'));
                                ?>
                            
                                <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" id="token" value="<?php echo $this->security->get_csrf_hash(); ?>">
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
                  
               
                    <?PHP if($resources2) :
                        foreach($resources2 as $comment):?>
                    
                                      <p><?php echo $comment->getField('Blog_Comments__BlogId::CommenterMessage')?></p>
                                  <p><i> by </i> <?php echo $comment->getField('Blog_Comments__BlogId::CommenterName')?> <i> on </i> <?php echo $comment->getField('Blog_Comments__BlogId::CommentDate')?><i> at </i><?php echo $comment->getField('Blog_Comments__BlogId::CommentTime')?> </p>
                                  <p><?php echo $comment->getField('Blog_Comments__BlogId::CommenterEmail')?></p> 
                                  <hr> 
                      
                        <?php endforeach; 
                   else:
                        echo '<h4>Be the first one to comment for this blog</h4>';
                        echo '<p>No comment are present for this blog</p>';
                   endif;
                    ?> 
                    
                 
                
                </div>
                </div>
            </div>    
        </div>   
    </div>

</div>

    
    <script type="text/javascript" src="<?php echo base_url(); ?>js/CommentAjax.js">var baseurl = "<?php print base_url(); ?>";</script>
        
</body>
</html>


