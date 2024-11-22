<!-- Connect File -->
<?php
include('./includes/connect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarvaswam</title>
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">
    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
          crossorigin="anonymous">
 <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <!-- Navbar -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <img src="./images/logo2.png" alt="Logo" class="logo" />
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-sharp fa-solid fa-cart-shopping"></i><sup>1</sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Total Price: ₹100</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
<!-- Second child -->
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
<ul class="navbar-nav me-auto">
<li class="nav-item">
         <a class="nav-link" href="Admin_area/index.php">Welcome User</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="#">Login</a>
      </li>
</ul>
  </nav> -->

  <?php
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
         <a class="nav-link" href="Admin_area/index.php">Admin</a>
      </li>
        <li class="nav-item">
            <?php if (isset($_SESSION['user'])): ?>
                <a class="nav-link" href="#">Welcome, <?php echo $_SESSION['user']; ?></a>
            <?php else: ?>
                <a class="nav-link" href="#">Welcome, Guest</a>
            <?php endif; ?>
        </li>
        <li class="nav-item">
            <?php if (isset($_SESSION['user'])): ?>
                <a class="nav-link" href="logout.php">Logout</a>
            <?php else: ?>
                <a class="nav-link" href="login.php">Login</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>

  <!-- Third Child -->
   <div class="bg-light">
   <h3 class="text-center">Sarvaswam Store</h3>
<p class="text-center">"Bringing You All That’s Valuable, with Care and Excellence"</p>

   </div>


<!-- Fourth Child -->
 <div class="row">
    <div class="col-md-10">
<!-- Products -->
<div class="row">
    <div class="col-md-4 mb-2">
    <div class="card">
  <img src="./images/Shirt.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
   </div>
    </div>
    <div class="col-md-4 mb-2">
    <div class="card">
  <img src="./images/watch.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
   </div>
   </div>
    </div>
    <div class="col-md-4 mb-2">
    <div class="card">
   <img src="./images/mobile.jpg" class="card-img-top" alt="...">
   <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
   </div>
  </div>
 </div>
 <!-- Second row -->
 <div class="col-md-4 mb-2">
    <div class="card">
   <img src="./images/mobile.jpg" class="card-img-top" alt="...">
   <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
   </div>
  </div>
 </div>
 <div class="col-md-4 mb-2">
    <div class="card">
   <img src="./images/mobile.jpg" class="card-img-top" alt="...">
   <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
   </div>
  </div>
 </div>
 <div class="col-md-4 mb-2 ">
    <div class="card">
   <img src="./images/mobile.jpg" class="card-img-top" alt="...">
   <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
   </div>
  </div>
 </div>


<!-- End of row -->
 </div>
    </div>
    <div class="col-md-2 bg-secondary p-0">
        <!-- Side NavBar -->
         <!-- Brands To be Dispalyed -->
         <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
                <a href="#" class="nav-link text-light " ><h4>Delivery Brands</h4></a>
            </li>
            <?php
$select_brands="Select * from `brands`";
$result_brands=mysqli_query($con,$select_brands);
// $row_data=mysqli_fetch_assoc($result_brands);
// echo $row_data['brand_title'];
while($row_data=mysqli_fetch_assoc($result_brands)){
    $brand_title=$row_data['brand_title'];
    $brand_id=$row_data['brand_id'];
    echo  "<li class='nav-item '><a href='index.php?brand=$brand_id' class='nav-link text-light'> $brand_title</a></li>";
}
          ?>
         </ul>
         <!-- Categories -->
         <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
                <a href="#" class="nav-link text-light " ><h4>Categories</h4></a>
            </li>
            <?php
$select_category="Select * from `categories`";
$result_category=mysqli_query($con,$select_category);
// $row_data=mysqli_fetch_assoc($result_brands);
// echo $row_data['brand_title'];
while($row_data=mysqli_fetch_assoc($result_category)){
    $category_title=$row_data['category_title'];
    $category_id=$row_data['category_id'];
    echo  "<li class='nav-item '><a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a></li>";
}

  ?>

         </ul>
        
    </div>
 </div>



<!-- Last Child -->
  <div class="bg-info p-3 text-center">
    <p>All rights are Reserved for ManojKumar 2024</p>

</div>  
    </div>

    <!-- Bootstrap JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>
</html>
