<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Components;

class Images extends Model
{
    protected $guarded = [];

    public function article(){
        return $this->belongsTo(Components::class);
    }
}
