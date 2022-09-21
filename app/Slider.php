<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //
    protected $table ='sliders';
    protected $filable =[
             'heading','description','link','link_name','image','status'

    ];
}
