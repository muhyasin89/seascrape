<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';
    protected $fillable = ['title','client','year','location','vesels','duration','wrov','description','next','prev'];
}
