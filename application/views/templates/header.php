<html>
	<head>
		<title>filmcritic</title>
		<link rel="stylesheet" href="https://bootswatch.com/readable/bootstrap.min.css">
	</head>
	<body>
	<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">filmcritic</a>
        </div>
        <div id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li><a href="<?php echo base_url(); ?>pages/view/browse">Browse</a></li>
            <li><a href="<?php echo base_url(); ?>pages/view/addmovie">Add movie</a></li>
            <li><a href="<?php echo base_url(); ?>pages/view/manage">Manage</a></li>
            <li><a href="<?php echo base_url(); ?>pages/view/about">About</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url(); ?>pages/view/login">Sign in</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">