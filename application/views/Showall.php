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
                        $i++;
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
                    <?php endforeach;
                 else:
                        echo '<h4>'.$resources1.'</h4>';
                 endif;
                    ?>
                
                <ul class="pagination">
               
                <?php 
                
                // PAGINATION cont.
                $per_page = 3;
                $search=$this->input->get('search');
                $skip=$this->uri->segment(3);
                $prev = $skip - $per_page;
                $next = $skip + $per_page;
                $record_count = $resources2;
                if ($skip>0) :  // previous button
                
                        echo "<li class='page-item'><a href='http://localhost/CodeIgniter/index.php/post/showall?skip=$prev&search=$search'>Prev</a></li> ";
                endif;
                $i=1;
                for($x=0; $x<$record_count; $x=$x+$per_page):      // numbers between previous and next
                    if ($skip==$x) :
                        echo "<li class='page-item'><a href='http://localhost/CodeIgniter/index.php/post/showall?skip=$x&search=$search'>$i</a></li> ";        
                        else :
                            echo "<li class='page-item'><a href='http://localhost/CodeIgniter/index.php/post/showall?skip=$x&search=$search'>$i</a></li> ";
                        
                        endif;
                        $i++;
                endfor;    

                ?>
               </ul>
                </div> 
            </div>
        </div>
    </div>
</div>
<script>
    $('.pagination li > a').click(function() {
  $('.pagination li').removeClass('active');
  $(this).parent().addClass('active');
    });
</script>
  
</body>
</html>       
