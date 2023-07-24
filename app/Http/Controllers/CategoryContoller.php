<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Repositories\EntityRepository;
use Illuminate\Http\Request;

class CategoryContoller extends Controller
{
    function getCategory($category){
        $categoria = CategoryRepository::getCategory($category);
        
        $respuesta = EntityRepository::getEntityByIdCategoria($categoria[0]['id']); 
        $array = array(
            "success"=>true,
            "data"=> array()
        );
        foreach($respuesta as $key => $resp){
            array_push($array['data'],$resp);
        }
        return $array;
    }
}
