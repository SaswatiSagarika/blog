<body id="app-layout">
    
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url('welcome/home') ?>">Salt and Pepper</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo site_url('welcome/home') ?>">Home </a></li>
        <li ><a href="<?php echo site_url('welcome/about') ?>">About </a></li>
        <li><a href="<?php echo site_url('welcome/contact') ?>">Contact</a></li>
        
      </ul>
        
      <ul class="nav navbar-nav navbar-right">
       
        <li class="dropdown">
                   
            <li><a href="<?php echo site_url('post/newblogform') ?>">Add New Blog</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo site_url('post/showall') ?>">All Blogs</a></li>
            <li><a href="<?php echo site_url('welcome/demo') ?>">Demo</a></li>
          
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
