<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Components;

class Articles extends Model
{
    protected $guarded = [];

    public function components(){
        return $this->hasMany(Components::class);
    }
}
