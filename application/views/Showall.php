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

    <title>Archives</title>
</head>
  

<body id="app-layout">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div  style="height: 345px;" class="panel-heading">
                    <div style="height: 257px;" class="jumbotron">
                        <h1>Archives</h1>
                        <p>This is What I do </p>
                    </div>
                     <form class="myform" action="" method="GET">
                        
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
                 
                <?php foreach($resources as $record):
                ?>
                    <div class="panel panel-primary">
                        <div style="height: 54px;"class="panel-heading">
                            <p hidden><?php $BlogID = $record->getField('BlogId');?></p>
                           <p class="panel-title pull-left"><?php echo $record->getField('SubjectTitle')?></p>
                            <p hidden></p>
                           <a class="btn btn-danger pull-right" href = "<?php echo site_url("/post/deleteblogform/".$BlogID) ?>"><span class="glyphicon glyphicon-trash"></a>
                            <a class="btn btn-info pull-right" href="<?php echo site_url("/post/editblogform/".$BlogID) ?>"><span class="glyphicon glyphicon-pencil"></a>
                     </div>
                       <div class="panel-body">
                      
                           <p><?php echo $record->getField('ListData');?></p>
                           <p><i> by </i> <b><?php echo $record->getField('AuthorName');?> </b><i> on </i> <b><?php echo $record->getField('Date')?></b></p>
                            <p><i> No of comments </i><b><?php echo $record->getField('CommentsNo');?></b></p>
                            <a class="btn btn-default" type="/"  href="<?php echo site_url("/post/readblogform/".$BlogID) ?>">
                                    Read more...</a>
                            
                        </div>
                    </div>
                <?php endforeach;?>
          
                <ul class="pagination">
                    <!--<li><a href="{{url('/list')}}?skip=0"><<</a></li>-->
                    <li class="page-item"><a class="page-link" href="<?php echo site_url('/post/showall/0')?>" >1</a></li>
                    <li class="page-item"><a class="page-link" href="<?php echo site_url('/post/showall/1')?>">2</a></li>
                    <li class="page-item"><a class="page-link" href="<?php echo site_url('/post/showall/2')?>">3</a></li>
                    <li class="page-item"><a class="page-link" href="<?php echo site_url('/post/showall/3')?>" >4</a></li>
                  </ul>
                </div> 
            </div>
        </div>
    </div>
</div>

 
  
</body>
</html>       
