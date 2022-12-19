<?php  include 'pages/header.php'?>
<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center"> Calculator </h1>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body" >
                        <form action="action.php" method="post">
                            <label for="firstNumber" class="form-label"> First Number :</label>
                            <input id="firstNumber" name="first_number" type="text " class="form-control" value="<?php echo isset($firstNumber)? $firstNumber :' ' ?>" placeholder="First Number"><br>
                            <label for="lastNumber" class="form-label"> Last Number :</label>
                            <input id="lastNumber" name="last_number" type="text " class="form-control" value="<?php echo isset($lastNumber)? $lastNumber :' ' ?>" placeholder="Last Number"><br>
                            <label for="lastNumber" class="form-label"> Choose :</label>
                            <input id="lastNumber" name="choose" type="radio" value="+"> &nbsp;+ &nbsp;&nbsp;
                            <input id="lastNumber" name="choose" type="radio" value="-"> &nbsp; - &nbsp;&nbsp;
                            <input id="lastNumber" name="choose" type="radio" value="*"> &nbsp; * &nbsp;&nbsp;
                            <input id="lastNumber" name="choose" type="radio" value="/"> &nbsp; / &nbsp;&nbsp;
                            <input id="lastNumber" name="choose" type="radio" value="%"> &nbsp; % &nbsp;&nbsp;
                            <br>
                            <label for="result" class="form-label"> Result :</label>
                            <input id="result"  type="text " class="form-control" value="<?php echo isset($result)? $result :' ' ?>" placeholder="Result"><br>
                            <input type="submit" name="calculate" class="btn btn-outline-success" value="Calculate"><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php  include 'pages/footer.php'?>
