<?php

namespace App\Http\Controllers\Admin;
use App\Models\Audio;

use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class AudioController extends Controller{

      public function index(){
       $audio = Audio::all();
     
          return view('admin.collection.audio.audio-index',compact('audio', $audio));


      }

      public function create(){
        $subcategory = Subcategory::where('status','!=','3')->get();
        return view('admin.collection.audio.audio-create')->with('subcategory',$subcategory);
        
        
              }

   public function store(Request $request){

                $audio = new Audio();

                  $audio-> heading_name = $request->input('heading_name');
                  $audio->sub_category_id = $request->input('sub_category_id');
                  $audio->url = $request->input('url');
                $audio-> description = $request->input('description');

                if ($request->hasFile('mp3url')) {
                    $file = $request->file('mp3url');
                    $extention  = $file->getClientOriginalExtension();
                    $filename = time().'.'.$extention;
                    $file->move('uploads/audio/mp3/', $filename);
            
                    $audio->mp3url = $filename;
                }

              
                
                if($request->hasfile('image_path')){

                    $file =$request->file('image_path');
                    $extention  = $file->getClientOriginalExtension();
                    $filename = time().'.'.$extention;
                    $file->move('uploads/audio/image/', $filename);
                     $audio->image_path = $filename;
                 }
        
                 $audio->status = $request->input('status') == true ? '1':'0';
                   $audio->new_arrival_products =$request->input('new_arrival_products') == true ? '1':'0';
                   $audio->populer_products =$request->input('populer_products') == true ? '1':'0';
                   $audio->	old_products =$request->input('old_products') == true ? '1':'0';
                
                   $audio->save();
                 return redirect()->back()->with('status','Audio added successfully.');


                
                  }

     public function edit($id){

               
                   $audio = Audio::find($id);
                   $subcategory = Subcategory::where('status','!=','3')->get();    
                        
                   return view('admin.collection.audio.audio-edit')->with('audio',$audio)->with('subcategory',$subcategory);
                    
                 
      
             }


             public function update(Request $request,$id){
               
              $audio = Audio::find($id);

              $audio-> heading_name = $request->input('heading_name');
              $audio->sub_category_id = $request->input('sub_category_id');
              $audio->url = $request->input('url');
            $audio-> description = $request->input('description');

            if ($request->hasFile('mp3url')) {
                $file = $request->file('mp3url');
                $extention  = $file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('uploads/audio/mp3/', $filename);
        
                $audio->mp3url = $filename;
            }

          
            
            if($request->hasfile('image_path')){

                $file =$request->file('image_path');
                $extention  = $file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('uploads/audio/image/', $filename);
                 $audio->image_path = $filename;
             }
    
             $audio->status = $request->input('status') == true ? '1':'0';
               $audio->new_arrival_products =$request->input('new_arrival_products') == true ? '1':'0';
               $audio->populer_products =$request->input('populer_products') == true ? '1':'0';
               $audio->	old_products =$request->input('old_products') == true ? '1':'0';
            
               $audio->update();
             return redirect()->back()->with('status','Audio added successfully.');







             }

}
