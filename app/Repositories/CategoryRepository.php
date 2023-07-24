<?php
namespace App\Repositories;

use App\Models\Category;
use App\Models\Entity;

class CategoryRepository
{

    public function getAll() 
    {
        return Entity::all();
    }

    

    public static function getCategory($category){
        return Category::where('category',$category)->get();
    }
    
}