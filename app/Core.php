<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Core extends Model
{
    protected $table = 'about_core';
    protected $fillable = ['title','content','category'];
}
