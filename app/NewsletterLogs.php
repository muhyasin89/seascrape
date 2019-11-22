<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsletterLogs extends Model
{
    protected $table = 'newsletter_log';
    protected $fillable = ['user_id','keterangan','category_id','newsletter_id'];

    public function newsletter(){
        return $this->hasOne('App\Newsletter');
    }

    public function category(){
        return $this->hasOne('App\SubscriberCategory');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

}
