<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Components;
use App\Models\Keywords;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Articles extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'headline'
    ];

    public function components(){
        return $this->hasMany(Components::class);
    }

    public function keywords(){
        return $this->belongsToMany(Keywords::class);
    }
}
