<?php

?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Bank</title>
<style>

.h:hover {
  transform: translateY(10px);
  transition: 1s ease-in-out;
}
.color{
  color:#007FFF;
}
</style>
</head>
<body>
<section id="header">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand  mb-0 h1" href="#">
  <img src="icon.png" width="30" height="30" class="d-inline-block align-top " alt=""> Bank
  </a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="transfer.php">Transfer Money</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewtranh.php">View Transcation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      
      
    </ul>
    
  </div>
</nav>
</section>

<div class="bg">
<div class="jumbotron jumbotron-fluid">
  <h1 class="display-4"><span class="color">F</span>irst<span class="color"> B</span>ank</h1>
  <p class="lead h">The Name you can Bank Upon</p>
  <hr class="my-4">
  <p>We provide complete Banking solutions. Bank at your door step at your convience</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="about.php" role="button">About</a>
  </p>
</div>
</div>
<div class="container">
<div class="card-deck text-center my-3">
  <div class="card bg-light border-info mb" style="width: 18rem;">
    <img class="card-img-top img-fluid" src="user.png" alt="Card image cap">
    <div class="card-body">
    
      <h5 class="card-title font-weight-bold ">Create User</h5>
      <a href="createuser.php" class="btn btn-primary">Users</a>
     
      
    </div>
  </div>
  <div class="card bg-light border-info mb" style="width: 18rem;" >
    <img class="card-img-top img-fluid" src="tr.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title font-weight-bold">Make Trasactions</h5>
      <a href="transfer.php" class="btn btn-primary">Make</a>
      
    </div>
  </div>
  <div class="card bg-light border-info mb" style="width: 18rem;">
    <img class="card-img-top img-fluid" src="view.png" alt="Card image cap">
    <div class="card-body">
   
      <h5 class="card-title font-weight-bold">View Transaction</h5>
      <a href="viewtranh.php" class="btn btn-primary">View</a>
      
    </div>
  </div>
</div>

</div>


<?php
include('foot.php');
?>



















<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>