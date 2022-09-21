<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    //
    public function index(){
           $slider = Slider::all();
            return view('admin.slider.index', compact('slider'));



    }
            public function create(){

             return view('admin.slider.create');
        
        
        
     }
    public function store(Request $request){

              $slider = new Slider();
               $slider-> heading = $request->input('heading');
              $slider-> description = $request->input('description');
               $slider-> link = $request->input('link');
              $slider-> link_name = $request->input('link_name');

      
            

          if($request->hasfile('image')){

            $file =$request->file('image');
            $extention  = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/slider/', $filename);
             $slider->image = $filename;
         }

              $slider->status = $request->input('status') == true ? '1':'0';
        
                $slider->save();
                return redirect()->back()->with('status','Slider added successfully.');
     }
    
     public function edit($id){
            $slider = Slider::find($id);
              return view('admin.slider.edit', compact('slider'));


     }

     public function update(Request $request , $id){

        $slider = Slider::find($id);
         $slider-> heading = $request->input('heading');
        $slider-> description = $request->input('description');
         $slider-> link = $request->input('link');
        $slider-> link_name = $request->input('link_name');


      

    if($request->hasfile('image')){

        $destination ='uploads/slider/'.$slider->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
      
        $file =$request->file('image');
      $extention  = $file->getClientOriginalExtension();
      $filename = time().'.'.$extention;
      $file->move('uploads/slider/', $filename);
       $slider->image = $filename;
   }

        $slider->status = $request->input('status') == true ? '1':'0';
  
          $slider->update();
          return redirect()->back()->with('status','Slider Update successfully.');
}

}
