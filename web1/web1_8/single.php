<?php
	include('./data.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $single_title; ?></title>
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
<?php

$id = $_GET['id'];
if(!empty($id)) {
  $singleData = $data[$id-1];
}
?>

<div class = "container">
	<div class = "row">
    <div class = "card">
    <div class = "card-body">
      <h5 class = "card-title">
        <?php echo $singleData['title']; ?></h5>
      <p class = "card-text">
        <?php echo $singleData['desc']; ?></p>
      <p class = "card-text">
        <small class = "text-body-secondary">
          <?php echo $singleData['price']; ?></small></p>
	</div>
  <img src="<?php echo $singleData['img']; ?>"
  class = "card-img-bottom" alt = "...">
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>