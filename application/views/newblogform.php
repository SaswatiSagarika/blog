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
    <title>Add new blog</title>
</head>
<body id="app-layout">
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Add new </h3>
                </div>
                <div class="panel-body">
                   <div class="row">
                
            
                   <form class="myform" id="myform" action="<?php echo site_url('/post/createnew')?>" method="POST">
            

                        <div class="form-group">
                            <label class="col-md-3 control-label">Subject</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="subject" id="subject">

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
                            <label class="col-md-3 control-label">Name</label>

                            <div class="col-md-8">
                                <input type="Text" class="form-control" name="name" id="name">

                            </div>
                        </div>

 <br>                       <div class="form-group">
                            <label class="col-md-3 control-label">Content</label>

                            <div class="col-md-8">
                                <Textarea type="text" rows="12" class="form-control" name="content" id="content"></textarea>

                            </div>
                        </div>
                        
<br>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Add New Post
                                </button>
                                <a class="btn btn-danger" href="{{ url('/list') }}">
                                    <i class="fa fa-btn fa-sign-out"></i>Cancel
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</body>
</html>    
