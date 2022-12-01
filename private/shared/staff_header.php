<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title><?php echo $PAGE_TITLE; ?></title>
</head>
<body>


    <header>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://cdn-icons-png.flaticon.com/512/869/869265.png" alt="" width="30" height="30" class="d-inline-block  mb-3">
      <h1 class="heading logo d-inline px-3 mt-3">GBI Staff Area</h1>
    </a>
    <!-- align-text-top -->
  </div>
</nav>
        
    </header>

    <div class="content text-center">
        <ul class="list-unstyled">
            <li><a href= "<?php echo url_for('/staff/index.php') ?>"><h4>menu</h4></a>
            </li>
        </ul>
    </div>
 
   