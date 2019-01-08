<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = "employee_types";
    protected $fillable = [
        'name', 'guard_name'
    ];
    
    public function employees(){
        return $this->hasMany('App\Models\Employee');
    }
}
