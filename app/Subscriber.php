<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $table = 'subscriber';
    protected $fillable = ['email','status','user_id','category_id'];

    public function category(){
        return $this->belongsTo('App\SubscriberCategory');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
