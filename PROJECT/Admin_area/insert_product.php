<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products- Admin Dashboard</title>
        <!-- Bootstrap CSS Link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">
<!-- Font Awesome Link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
          crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <!-- Form -->
         <form action="" method="POST" enctype="multipart/form-data">
            <!-- Title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_title" placeholder="Enter the prdouct title"
                class="form-control" autocomplete="off" required="required"/>
            </div>
            <!-- Description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product Description</label>
                <input type="text" name="description" id="description" placeholder="Enter the Product Description"
                class="form-control" autocomplete="off" required="required"/>
            </div>
            <!-- Product Keyword -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product Keyword</label>
                <input type="text" name="product_keywords" id="product_keywords" placeholder="Enter the Product Keyword"
                class="form-control" autocomplete="off" required="required"/>
            </div>
            <!-- Categories -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" class="form-select">
                <option value="">Select a category</option>
                    <option value="">Fruitsy</option>
                    <option value="">Ice Cream</option>
                    <option value="">Vegetables</option>
                    <option value="">Select a category</option>
                    <option value="">Select a category</option>
                    <option value="">Select a category</option>
                    <option value="">Select a category</option>
                </select>
            </div>
            <!-- Brands -->
                <!-- Categories -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="brand_category" class="form-select">
                <option value="">Select a Brand</option>
                    <option value="">Fruitsy</option>
                    <option value="">Ice Cream</option>
                    <option value="">Vegetables</option>
                    <option value="">Select a brand</option>
                    <option value="">Select a brand</option>
                    <option value="">Select a category</option>
                    <option value="">Select a category</option>
                </select>
            </div>
            <!--  Image 1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product Image 1</label>
                <input type="file" name="product_image1" id="product_image1"
                class="form-control"  required="required"/>
            </div>
             <!--  Image 2 -->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product Image 2</label>
                <input type="file" name="product_image2" id="product_image2"
                class="form-control"  required="required"/>
            </div>
             <!--  Image 3 -->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product Image 3</label>
                <input type="file" name="product_image3" id="product_image3"
                class="form-control"  required="required"/>
            </div>
            <!-- Price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price" id="product_price" placeholder="Enter Product Price"
                class="form-control" autocomplete="off" required="required"/>
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Products"/>
            </div>

         </form>
    </div>






    <!-- Bootstrap JS Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>