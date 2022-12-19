<?php

namespace App\classes;
use App\classes\Category;
use App\classes\Brand;
class Product
{
    public $product=[];
    public $products;
    public $category;
    public $categorybyId;
    public $brand;
    public $brandById;
    public $res=[];

    public function __construct()
    {
        $this->product=[
            [
                'id'=>1,
                'category_id'=>1,
                'brand_id'=>1,
                'name'=>"New Laptop",
                'price'=>'1089$',
                'description'=>'Hp pavilon-14.11 gen with touch screen.',
                'company_name'=>'HP',
                'image'=>'l1.jpg',

            ],
            [
                'id'=>2,
                'category_id'=>1,
                'brand_id'=>1,
                'name'=>"New Laptop",
                'price'=>'1229$',
                'description'=>'Hp pavilon-14.11 gen with touch screen.',
                'company_name'=>'HP',
                'image'=>'l2.jpg',

            ],
            [
                'id'=>3,
                'category_id'=>1,
                'brand_id'=>1,
                'name'=>"New Laptop",
                'price'=>'389$',
                'description'=>'Hp pavilon-14.11 gen with touch screen.',
                'company_name'=>'HP',
                'image'=>'l3.jpg',

            ],
            [
                'id'=>4,
                'category_id'=>2,
                'brand_id'=>2,
                'name'=>"New Mobile",
                'price'=>'589$',
                'description'=>'Brand new 11 version with water proof',
                'company_name'=>'Samsumg',
                'image'=>'m1.jpg',

            ],
            [
                'id'=>5,
                'category_id'=>2,
                'brand_id'=>2,
                'name'=>"New Mobile",
                'price'=>'889$',
                'description'=>'Brand new 11 version with water proof',
                'company_name'=>'Samsumg',
                'image'=>'m2.jpg',

            ],
            [
                'id'=>6,
                'category_id'=>2,
                'brand_id'=>2,
                'name'=>"New Mobile",
                'price'=>'890$',
                'description'=>'Brand new 11 version with water proof',
                'company_name'=>'Samsumg',
                'image'=>'m3.jpg',

            ],
        ];
    }
    public function allProduct(){
       return $this->product;
    }
    public function productDetails($product_id){
        $this->products=$this->allProduct();
        foreach ($this->products as $product){
            if($product['id']==$product_id){
                $this->category=new Category();
               $this->categorybyId= $this->category->getCategory($product['category_id']);
                $product['category_name']=$this->categorybyId['name'];

                $this->brand=new Brand();
               $this->brandById= $this->brand->getBrand($product['brand_id']);
               $product['brand_name']=$this->brandById['name'];
               return $product;
            }
        }
    }
    public function productByCategory($id){
        $this->products=$this->allProduct();
        foreach ($this->products as $product){
            if($product['category_id']==$id){
                array_push($this->res,$product);
            }
        }
        return $this->res;
    }


}