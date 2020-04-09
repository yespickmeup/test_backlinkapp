<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }
    public function Domain(){
        return $this->hasMany(Domain::class);
    }
}
