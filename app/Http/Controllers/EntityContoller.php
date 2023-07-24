<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Repositories\EntityRepository;
use Illuminate\Http\Request;
use App\Services\Entities;

class EntityContoller extends Controller
{
    public function getEntities(){
        $entities = Entities::obtenerEntities();
        foreach ($entities['entries'] as $key => $entity) {
            if($entity['Category'] == 'Security' || $entity['Category'] == 'Animals'){
                $category = CategoryRepository::getCategory($entity['Category']);
                $idCategory = json_decode($category)[0]->id;
                EntityRepository::setEntity($entity, $idCategory);
            }
        }
    }
}
