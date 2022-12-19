<?php include 'pages\header.php'?>
<section class="py-4">
    <div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center">Product Inoformation</h1>
                </div>
            </div>
        </div>
    </div>
        <br>
        <div class="row">
            <div class="col-xl-4 col-md-4">
                <div class="card">
                    <img src="assets\image\<?php echo $productById['image']?>" alt="" height="300px">
                </div>
            </div>
            <div class="col-xl-8 col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4>Product Name : <?php echo $productById['name']?></h4>
                        <p>Category Name :<?php echo $productById['category_name']?></p>
                        <p>Brand Name :<?php echo $productById['brand_name']?></p>
                        <p>Product Price :<?php echo $productById['price']?></p>
                        <p>Product Description :<?php echo $productById['description']?></p>
                        <p>company Name :<?php echo $productById['company_name']?></p>
                    </div>
                </div>
                <br> <br>
                <a href="action.php?page=home" class="btn btn-outline-secondary">Back to Home</a>
            </div>
        </div>
    </div>
</section>
<?php include 'pages\footer.php'?>
