<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    public function Author(){
        $this->belongsTo("App\Models\Author");
    }
}
