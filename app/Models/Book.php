<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function author()
    {
        return $this->hasOne('App\Modals\Author','id','author_id');
    }

    public function genres()
    {
        return $this->hasOne('App\Modals\Genres','id','genres_id');
    }
}
