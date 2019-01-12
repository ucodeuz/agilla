<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use Sluggable;

    protected $fillable = ['name_uz', 'name_ru', 'parent_id', 'type', 'slug'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\Region', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Models\Region', 'parent_id');
    }
}
