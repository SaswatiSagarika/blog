<?php
/**
    *File name: editblog.
    *File type: php.
    *Date of  creation:20th March 2017.
    *Author:mindfire solutions.
    *Purpose: this php file  get id and edit the student record.
    *Path:D:\PHP Projects\blog and comments\blog1\resources\veiws\pages.
    **/
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>
    Update
</title>

</head>
<body id="app-layout">
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Edit this Blog </div>
                <div class="panel-body">
                   <div class="row">
                <div class="col-sm-12" id="errorDiv">
                   
                </div>
            </div>
            <div>
            <?php
              echo form_open('post/editrecordblog', array('id'=>'myform', 'class'=>'myform'));
            ?>                  
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
            id="token" value="<?php echo $this->security->get_csrf_hash(); ?>"> 
            <?php foreach ($resources as $record) : ?>
                <input type="Hidden" name="id" id="id" value="<?php echo $record->getField('BlogId')?>"/>
                <div class="form-group">
                    <label class="col-md-3 control-label">Subject</label>
                    <div class="col-md-8">
                    <input type="text" class="form-control" name="subject" id="subject"
                           value="<?php echo $record->getField('SubjectTitle')?>">
                        <?php echo form_error('subject'); ?>
                    </div>
                </div>
<br>
                <div class="form-group">
                    <label class="col-md-3 control-label">Name</label>

                    <div class="col-md-8">
                        <input type="Text" class="form-control" name="name" id="name"
                               value=" <?php echo $record->getField('AuthorName')?>">
                    <?php echo form_error('name'); ?>
                    </div>
                </div>

<br>            <div class="form-group">
                    <label class="col-md-3 control-label">Content</label>

                    <div class="col-md-8">
                        <Textarea type="text" rows="15" class="form-control" name="content"
                                  id="content"><?php echo $record->getField('Subject')?></textarea>
                        <?php echo form_error('content'); ?>
                    </div>
                </div>
<br>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">
                            Update Post
                        </button>
                        <button  class="btn btn-danger" href="<?php echo site_url('/post/showall')?>">
                            Cancel
                        </button>
                    </div>
                </div>
                    
            <?php endforeach;
            echo form_close();?>
                    
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
