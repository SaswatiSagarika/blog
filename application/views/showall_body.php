</div>
                       <div class="panel-body">
                      
                           <p><?php echo $record->getField('ListData');?></p>
                           <p><i> by </i> <b><?php echo $record->getField('AuthorName');?> </b><i> on </i> <b><?php echo $record->getField('Date')?></b></p>
                            <p><i> No of comments </i><b><?php echo $record->getField('CommentsNo');?></b></p>
                            <a class="btn btn-default" type="/"  href="<?php echo site_url("/post/readblogform/".$BlogID) ?>">
                                    Read more...</a>
                            
                        </div>
                    </div>
                    <?php //endforeach;
                 //else:
                 //       echo '<h4>'.$resources1.'</h4>';
                 //endif;
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