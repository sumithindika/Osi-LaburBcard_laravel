<?php

namespace App\Http\Controllers;

use App\Models\Audio;
use App\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

$slider = Slider::where('status','0')->get();
  $audio = Audio::where('status','0')->get();
  $audio  = Audio::paginate(3);
   return view('layouts.frontend')->with('slider',$slider);

    }
}
