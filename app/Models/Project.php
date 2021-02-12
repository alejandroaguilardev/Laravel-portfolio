<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function getRouteKeyName(){
        return "slug";
    }

    public function products(){
        return $this->belongsTo(Category::class);
    }
}
