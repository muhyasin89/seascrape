<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maps extends Model
{
    protected $fillable = ['location','description','maps'];

    public function user(){
        return $this->belongsTo('App\Maps');
    }
}
