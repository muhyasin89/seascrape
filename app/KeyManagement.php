<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeyManagement extends Model
{
    protected $table = 'about_key_management';
    protected $fillable = ['name','position','image','description','next','prev'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function next(){
        return $this->belongsTo('App\User','next','id');
    }
    public function prev(){
        return $this->belongsTo('App\User','prev','id');
    }
}
