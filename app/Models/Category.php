<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    protected $fillable = ['name_uz', 'name_ru', 'fullname_uz', 'fullname_ru', 'parent_id', 'position','slug'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name_ru'
            ]
        ];
    }

    public function children(){
        return $this->hasMany( 'App\Models\Category', 'parent_id', 'id' );
    }
      
    public function parent(){
        return $this->hasOne( 'App\Models\Category', 'id', 'parent_id' );
    }
}
