<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientModel extends Model
{
    protected $table = 'client_model';
    protected $fillable = ['title','image'];
}
