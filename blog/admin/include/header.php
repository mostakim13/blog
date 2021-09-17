<?php

$url = 'http://localhost/blog/admin/';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="<?php echo $url ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $url ?>assets/style.css" rel="stylesheet">

    <title>Mostakim</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">DIU</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Post</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="main_content">
   <div class="container">
     <div class="row clearfix">
        <div class="col-md-3">
          <ul class="list-group">
             
            <li class="list-group-item active">Left Menu</li>
            <li class="list-group-item">
              <a href="<?php echo $url; ?>categories/index.php">Category</a></li>
              <li class="list-group-item">
              <a href="<?php echo $url; ?>post/index.php">Post</a></li>
              <li class="list-group-item">
              <a href="">Update Password</a></li>
              <li class="list-group-item">
              <a href="">Profile Photo</a></li>

          </ul>
        </div>
        <div class="col-md-9">