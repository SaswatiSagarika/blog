/**
*File name: CreateCommentAjax.
*File type: js.
*Date of  creation:1st march 2017.
*Author:mindfire solutions(saswati).
*Purpose: this page contain javascript for read php page.
*Path:D:\Projects\hello-world\demo\js.
**/

/**
* helps in creatin new comment to the blog.
* @param TOKEN CSRF_TOKEN.
* @param string string_object.
* @param integer i.
* @filesource read.blade.php.
**/

$(document).ready( function() {
   
     // var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
   // var csrf = $.cookie('csrf_cookie_name');
    // var csrf = '<?php echo $this->security->get_csrf_hash(); ?>';
   
    var csrf_test_name = $("input[name=csrf_test_name]").val(); 
        $("#postbutton").on('click',function(e){
        e.preventDefault();
        $.blockUI({ message: '<h1> Just a moment...</h1>' });
        
        
        $('input+span>strong').text('');
        $('input').parent().parent().removeClass('has-error');
        
        //$('textarea+span>strong').text('');
        //$('textarea').parent().parent().removeClass('has-error');
        
        $.ajax({
            url: 'http://localhost/CodeIgniter-2.2.6/index.php/comment/addnewcomments',
            type: 'post',
            data: { csrf_test_name : csrf_test_name, id:$("#id").val(), name:$("#name").val(),
            email:$("#email").val(),comment:$("#comment").val()},
            dataType: 'JSON',
            success: function (response) {
                
                // console.log(response);
                 //alert(response['error']);
               
                if(response['error']== 'True'){
                    var error = '<div class="alert alert-danger"><ul>';
               
                    error += '<li>'+response['name'] + '</li><li>'+response['email'] + '</li><li>'+response['comment'] + '</li>';
               
                error+='</ul></div>';
                $('#errorDiv').show().html(error);
                
                
                } else{
                    
                var comment ='<p>'+response['CommenterMessage']+'</p><p><i> by </i> '+response['CommenterName']+ '<i> on </i>'+response['CommentDate'] +'  <i> at </i>'+ response['CommentTime']+'</p><p>'+response['CommenterEmail']+'</p><hr>';
                 alert(response.CommenterMessage);   
                $("#comment-list").prepend(comment);
               
                $('.myform').trigger("reset");
            }
             $.unblockUI();   
            }
            
            
            
        }).fail(function (data) {
                    //$.each(data.responseJSON, function (key, value) {
                    //    
                    //    var input = '#myform input[name=' + key + ']';
                    //    $(input + '+span>strong').text(value);
                    //    $(input).parent().parent().addClass('has-error');
                    //    
                    //    var textarea = '#myform input[name=' + key + ']';
                    //    $(textarea + '+span>strong').text(value);
                    //    $(textarea).parent().parent().addClass('has-error');
                    //    
                    //    });
            });
        });
    });
