<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubscriberCategory extends Model
{
    protected $table = 'subscriber_category';
    protected $fillable = ['category'];

    public function user(){
        return $this->belongsTo('App\User');
    }

}
