<?php

namespace App\classes;

class Category
{
    public $categories;
    public function getCategory($id){
        $this->categories=$this->allcategory();
        foreach ($this->categories as $category){
            if($category['id']==$id){
                return $category;
            }
        }
    }
    public function allcategory(){
        return[
            [
                'id'=>1,
                'name'=>'Laptop',
            ],
            [
                'id'=>2,
                'name'=>'Mobile',
            ],
        ];
    }
}