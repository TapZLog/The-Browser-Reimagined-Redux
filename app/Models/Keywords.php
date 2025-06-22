<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Keywords extends Model
{
    public function articles(){
        return $this->belongsToMany(Articles::class);
    }
}
