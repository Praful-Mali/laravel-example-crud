<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Books extends Model
{
    protected $table = 'books';
    protected $fillable = [
        'name',
        'description'
    ];
}
