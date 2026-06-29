<?php
	include('./data.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $shop_title; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./shop.php">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./reg.php">Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./myaccount.php">My Account</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class = "container">
  <div class = "row">
    <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i.ibb.co/605BVbbN/1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.ibb.co/9mDKSmsJ/2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.ibb.co/tw8sG973/3.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.ibb.co/3YpRDbBZ/4.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.ibb.co/1tQSx7Fc/5.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.ibb.co/B2TsqPtK/6.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>
</div>

<div class = "container pt-3">
	<div class = "row">
    <?php include('./loop.php'); ?>
	</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>