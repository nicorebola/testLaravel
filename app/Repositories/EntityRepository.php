<?php
namespace App\Repositories;

use App\Models\Entity;

class EntityRepository
{

    public function getAll() 
    {
        return Entity::all();
    }

    public static function setEntity($entity, $idCategory){
        $entity = Entity::create([
            'api' => $entity['API'],
            'description' => $entity['Description'],
            'link' => $entity['Link'],
            'category_id' => $idCategory 
        ]);
        return $entity;
    }

    public static function getEntityByIdCategoria($idCategory){
        return Entity::where('category_id', $idCategory)->get();
    }
}