<?php

namespace App\Http\Controllers;

use App\Models\Audio;
use Illuminate\Http\Request;

class Mp3listController extends Controller
{
    //

    public function index(){

        
        $audio = Audio::paginate(8);
        
           return view('frontend.audio.mp3list', compact('audio'));
        
            }
}
