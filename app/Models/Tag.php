<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    //Relación muchos a muchos

    public function post(){
        return $this->belongsToMany(Post::class);
    }
}
