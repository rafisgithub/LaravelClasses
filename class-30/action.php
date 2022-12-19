<?php
require_once 'vendor\autoload.php';
use App\classes\Product;
use App\classes\Category;
use App\classes\Home;
use App\classes\Calculator;
$product=new Product();
$category=new Category();
$categories=$category->allcategory();
if(isset($_GET['page'])){
    if($_GET['page']=='home'){

       $products= $product->allProduct();
        include 'pages\home.php';
    }elseif ($_GET['page']=='details'){
      $product_id=$_GET['id'];
     $productById= $product->productDetails($product_id);
        include 'pages\details.php';
    }elseif ($_GET['page']=='category'){
        $category_id=$_GET['id'];
        $products=$product->productByCategory($category_id);
        include 'pages/category.php';
    }elseif ($_GET['page']=='contact'){
        include 'pages\contact.php';
    }elseif ($_GET['page']=='calculator'){
        include 'pages\calculator.php';
    }
}else if($_POST){
    if(isset($_POST['make_full_name'])){
        $firstName=$_POST['first_name'];
        $lastName=$_POST['last_name'];
        $fullName=$firstName.' '.$lastName;
        include 'pages\contact.php';
    } if (isset($_POST['calculate'])){
        $calculator=new Calculator();
        $result=$calculator->calculate($_POST);
        $firstNumber=$_POST['first_number'];
        $lastNumber=$_POST['last_number'];
        include 'pages/calculator.php';
    }
}else{
    $home=new Home();
    $home->index();;
}
?>