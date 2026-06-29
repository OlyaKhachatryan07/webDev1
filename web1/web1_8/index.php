<?php
	include('./data.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $index_title; ?></title>
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
    <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i.ibb.co/8gymDG4n/1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.ibb.co/zWwP6wcd/image.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.ibb.co/WvVVhGcW/2.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
	</div>
</div>

<div class = "container">
  <div class = "row">
    <div class = "col-4 p-2">
      Fashion is a dynamic, evolving, and culturally significant phenomenon, defining popular styles in clothing, accessories, and beauty, rather than just functional garments. It acts as a visual language for self-expression, reflecting social, psychological, and economic moods while serving as a global industry that anticipates and shapes how we present ourselves.
    </div>
    <div class = "col-4 p-2">
      Fashion is not merely about clothes, labels, brands, or following fleeting trends. It is not about simply dressing up to meet societal standards or wearing expensive items, but rather about self-expression, comfort, confidence, and internal style. True fashion transcends, focusing on personality and character rather than just fabric.
    </div>
    <div class = "col-4 p-2">
      Style in fashion is a powerful, motivational tool for self-expression, confidence, and personal empowerment, moving beyond fleeting trends to define your unique identity. It serves as a visual language to represent your inner strength, allowing you to "wear your character" and boost your daily mood and productivity.
    </div>
  </div>
</div>

<div class = "container">
  <div class = "row">
    <div class = "col-6 p-2">
      <img src = "https://i.ibb.co/2Y18CHKT/Screenshot-2026-02-08-at-13-55-29.png" style="max-height: 600px;object-fit: cover;">
    </div>
    <div class = "col-6 p-2">
      <img src = "https://i.ibb.co/HDcp43JN/Screenshot-2026-02-08-at-13-57-06.png" style="max-height: 600px;object-fit: cover;">
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>