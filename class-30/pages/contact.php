<?php include 'pages\header.php'?>
<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center">Contact form</h1>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <label for="firstName">First Name :</label>
                            <input type="text" id="firstName" name="first_name" class="form-control" placeholder="First Name" value="<?php echo isset($firstName)?$firstName:' '?>"><br>

                            <label for="lastName">Last Name :</label>
                            <input type="text" id="lastName" name="last_name" class="form-control" placeholder="Last Name" value="<?php echo isset($lastName)?$lastName:' '?>"><br>

                            <label for="fullName">First Name :</label>
                            <input type="text" id="fullName" name="full_name" class="form-control" placeholder="Full Name" value="<?php echo isset($fullName)?$fullName:' '?>"><br>
                            <input type="submit" name="make_full_name" class="btn btn-outline-dark" value="Make full Name" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <a href="action.php?page=home" class="btn btn-outline-success">Go Home</a>
    </div>
</section>
<?php include 'pages\footer.php'?>
