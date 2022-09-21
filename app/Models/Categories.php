<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table ='categories';
    protected $filable =[
           'group_id','url','name','description','image','icon','status',
    ];

public function group(){

   return $this->belongsTo(Groups::class,'group_id','id');


}


}
