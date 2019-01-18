<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Region extends Model
{
    use Sluggable;

    protected $fillable = ['name_uz', 'name_ru', 'parent_id', 'type', 'slug'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name_ru'
            ]
        ];
    }
    public function children(){
        return $this->hasMany( 'App\Models\Region', 'parent_id', 'id' );
      }
      
      public function parent(){
        return $this->hasOne( 'App\Models\Region', 'id', 'parent_id' );
      }

    public function scopeType(Builder $builder, $typeId = 1)
    {
            $builder->where('type', $typeId);
    }
}
