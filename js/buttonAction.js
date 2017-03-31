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
   $('highlight').on('click', function() {
    $('highlight').removeClass('active');
    $(this).addClass('active');
});
});