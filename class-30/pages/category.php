<?php include 'pages\header.php'?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">All product are here</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php foreach ($products as $product){?>
                    <div class="col-xl-4 col-md-12 pt-4">
                        <div class="card">
                            <img src="assets\image\<?php echo $product['image']?>" alt="" height="300px">
                            <div class="card-body">
                                <h4><?php echo $product['name']?></h4>
                                <p><?php echo $product['price']?></p>
                                <p><?php echo $product['description']?></p>
                                <p><?php echo $product['company_name']?></p>
                                <a href="action.php?page=details&id=<?php echo $product['id']?>" class="btn btn btn-outline-info">Details</a>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>
<?php include 'pages\footer.php'?>