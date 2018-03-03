<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shareboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">Shareboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL ?>shares ">Shares</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if(isset($_SESSION['logged_in'])):   ?>
      <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL ?> ">Welcome <?php echo $_SESSION['user_data']['name'] ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL ?>users/logout ">Logout</a>
        </li>

      <?php else :  ?> 
        <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL ?>users/login ">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL ?>users/register ">Register</a>
        </li>
      </ul>
    <?php endif; ?> 
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
<div class="container">
    <!-- <div class="row"> -->
        <?php Messages::display() ?>
        <?php require($view); ?>
    <!-- </div> -->
</div>

</body>
</html>