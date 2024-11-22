<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">
<!-- Font Awesome Link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
          crossorigin="anonymous">

  <style>
    /* Navbar Styling */
    .navbar {
        background-color: #FF5733; /* Orangish-red */
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    }

    .navbar .logo {
        width: 80px;
        margin-right: 30px; /* Space between logo and welcome text */
    }

    .navbar .nav-link {
        color: white !important;
        font-size: 16px;
        padding: 10px 20px; /* Increased padding */
        transition: background-color 0.3s ease, color 0.3s ease;
        border-radius: 5px;
    }

    /* Hover effect only on the text for the Welcome User link */
    .navbar .nav-link:hover {
        background-color: #8A2BE2; /* Violet hover effect */
        color: white !important;
        padding: 10px 20px; /* Ensure padding remains consistent */
    }

    /* Header Section */
    .bg-light h3 {
        color: #FF5733; /* Match the navbar color */
        font-weight: bold;
    }

    /* Admin Section */
    .admin_image {
        width: 120px; /* Increased admin image size */
        object-fit: contain;
        border-radius: 50%; /* Circular admin image */
        border: 3px solid #FF5733; /* Border matching theme */
    }

    /* Admin Name Styling */
    .text-center p {
        font-size: 20px; /* Increased font size for admin name */
        font-weight: 700; /* Bold font */
        color: #FF5733; /* Admin name color matches theme */
        margin-top: 10px; /* Add space between image and text */
    }

    /* Button Styling */
    .button a {
        font-size: 14px; /* Reduced font size */
        font-weight: 500;
        padding: 8px 18px; /* Reduced padding */
        display: block;
        border-radius: 5px; /* Rounded buttons */
        margin: 8px 0; /* Space between buttons */
        border: 2px solid #FF5733; /* Border color */
        color: #FF5733; /* Default color */
        text-align: center;
        text-decoration: none; /* Remove underline */
        transition: all 0.3s ease; /* Smooth transition for hover effect */
    }

    /* Button Hover Effect */
    .button a.bg-info {
        background-color: #FF5733; /* Orangish-red for buttons */
        color: white;
        border: 2px solid #8A2BE2; /* Border color change on hover */
    }

    .button a.bg-info:hover {
        background-color: #8A2BE2; /* Violet on hover */
        color: white;
        border: 2px solid #FF5733; /* Revert border on hover */
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
        .admin_image {
            width: 100px; /* Slightly smaller image for mobile */
        }

        .button a {
            font-size: 12px; /* Smaller font size for mobile */
            padding: 6px 12px; /* Smaller padding */
        }
    }
.footer{
    position: absolute;
    bottom: 0;
}
</style>


</head>
<body>
<!-- Navbar -->
<div class="container-fluid p-0">
    <!-- First Child -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <img src="../images/logo1.png" alt="Logo" class="logo" />
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Welcome User</a>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>

    <!-- Second Child -->
    <div class="bg-light">
        <h3 class="text-center p-2">Manage Details</h3>
    </div>

    <!-- Third Child -->
    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="p-3">
                <a href="#"><img src="../images/adminlogo.png" alt="Admin Image" class="admin_image"/></a>
                <p class="text-center">Admin Name</p>
            </div>
            <div class="button text-center">
                <button><a href="insert_product.php" class="nav-link bg-info my-1">Insert Products</a></button>
                <button><a href="#" class="nav-link bg-info my-1">View Products</a></button>
                <button><a href="index.php?insert_category" class="nav-link bg-info my-1">Insert Categories</a></button>
                <button><a href="#" class="nav-link bg-info my-1">View Categories</a></button>
                <button><a href="index.php?insert_brand" class="nav-link bg-info my-1">Insert Brands</a></button>
                <button><a href="#" class="nav-link bg-info my-1">View Brands</a></button>
                <button><a href="#" class="nav-link bg-info my-1">All Orders</a></button>
                <button><a href="#" class="nav-link bg-info my-1">All Payments</a></button>
                <button><a href="#" class="nav-link bg-info my-1">List Users</a></button>
                <button><a href="#" class="nav-link bg-info my-1">Logout</a></button>
            </div>
        </div>
    </div>

    <!--Fourth Child  -->
    <div class="container my-3">
        <?php 
        if(isset($_GET['insert_category'])){
            include('insert_categories.php');
        }
        if(isset($_GET['insert_brand'])){
            include('insert_brands.php');
        }
        ?>
    </div>







    <!-- Last Child -->
  <div class="bg-info p-3 text-center footer">
    <p>All rights are Reserved for ManojKumar 2024</p>

</div>  
</div>

<!-- Bootstrap JS Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
