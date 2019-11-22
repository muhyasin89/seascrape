<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceEquipment extends Model
{
    protected $table = 'service_equipment';
    protected $fillable = ['title','description','pdf_file','next','prev','image'];
}
