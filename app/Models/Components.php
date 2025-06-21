<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Images;
use App\Models\Articles;

class Components extends Model
{
    protected $guarded = [];

    public function article(){
        return $this->belongsTo(Articles::class);
    }

    public function images(){
        return $this->hasMany(Images::class);
    }
}
