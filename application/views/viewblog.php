<html>
<head>
<title><?php echo $title;?></title>
</head>
<body>
	<h1><?php echo $heading;?></h1>
        <ul>
<?php foreach ($todo_list as $item):?>

<li><?php echo $item;?></li>

<?php endforeach;?>
</ul>
<? echo form_open_multipart('welcome/upload');?>
</body>
</html>