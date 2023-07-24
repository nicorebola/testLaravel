<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Entity extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id',
        'api',
        'description',
        'link',
        'category_id'
    ];

    public function relacionCategory(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
