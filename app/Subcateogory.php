<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcateogory extends Model
{
    public function Domain(){
        return $this->belongsTo(Domain::class);
    }
}
