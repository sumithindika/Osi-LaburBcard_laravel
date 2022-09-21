<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table ='subcategorys';
    protected $filable =[
           'category_id','url','name','description','image',
    ];	


    public function category(){

        return $this->belongsTo(Categories::class,'category_id','id');
     
     
     }


}
