<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    protected $table ='audio';
    protected $filable =[
        
           'sub_category_id','url','heading_name','description','mp3url','image_path','status',
           'new_arrival_products','populer_products','old_products',
     ];

     

    public function subcategory(){

        return $this->belongsTo(Subcategory::class,'sub_category_id','id');
     
     
     }

}

