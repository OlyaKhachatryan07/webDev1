<?php
	include('./data.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $my_account_title; ?></title>
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
    <section class="w-100 px-4 py-5" style="background-color: #522128; border-radius: .5rem .5rem 0 0;">
  <div class="row d-flex justify-content-center">
    <div class="col col-md-9 col-lg-7 col-xl-6">
      <div class="card" style="border-radius: 15px;">
        <div class="card-body p-4">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                alt="Generic placeholder image" class="img-fluid" style="width: 180px; border-radius: 10px;">
            </div>
            <div class="flex-grow-1 ms-3">
              <h5 class="mb-1">Olya Khachatryan</h5>
              <p class="mb-2 pb-1">my_mail@gmail.com</p>
              <div class="d-flex justify-content-start rounded-3 p-2 mb-2 bg-body-tertiary">
                <div>
                  <p class="small text-muted mb-1">Orders</p>
                  <p class="mb-0">12</p>
                </div>
                <div class="px-3">
                  <p class="small text-muted mb-1">Delivered</p>
                  <p class="mb-0">2</p>
                </div>
                <div>
                  <p class="small text-muted mb-1">Cart Items</p>
                  <p class="mb-0">341</p>
                </div>
              </div>
              <div class="d-flex pt-1">
                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-secondary flex-grow-1 me-1">Shop</button>
                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-secondary flex-grow-1 me-1">My items</button>
                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light">Settings</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
	</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>