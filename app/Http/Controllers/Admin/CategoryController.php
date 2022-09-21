<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Groups;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $category = Categories::where('status','!=','3')->get();

           return view('admin.collection.category.index')->with('category',$category);

    }
    public function create(){

        $group = Groups::where('status','!=','3')->get();   //3 deleted data


        return view('admin.collection.category.create')->with('group', $group);   



    }
    public function store(Request $request){
           
        $category = new Categories();
           $category->group_id =$request->input('group_id');
           $category->name = $request->input('name');
           $category->url = $request->input('url');
           $category->description = $request->input('description');
          // $category->image = $request->input('category_img');

           if($request->hasfile('category_img')){

            $file =$request->file('category_img');
            $extention  = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/categoryimage/', $filename);
            $category->image = $filename;
         }
           //$category->icon = $request->input('category_icon');
               
           if($request->hasfile('category_icon')){

            $icon_file =$request->file('category_icon');
            $icon_extention  = $icon_file->getClientOriginalExtension();
            $icon_filename = time().'.'.$icon_extention;
            $icon_file->move('uploads/categoryicon/', $icon_filename);
            $category->icon = $icon_filename;
         }




           $category->status = $request->input('status') == true ? '1':'0';  //0=show 1=hide
           $category->save();

            return redirect()->back()->with('status','Category added successfully.');

    }
     


    public function edit($id){
       //deleted data

        $category = Categories::find($id);
        $group = Groups::where('status','!=','3')->get();
        return view('admin.collection.category.edit')->with('group',$group)->with('category',$category);  


    }
      
    public function update(Request $request,$id){

        $category = Categories::find($id);
        $category->group_id =$request->input('group_id');
        $category->url = $request->input('url');
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        


        if($request->hasfile('category_img')){

            $filepath_image ='uploads/categoryimage/'.$category->image;
            if(File::exists($filepath_image)){
                File::delete($filepath_image);
            }




         $file =$request->file('category_img');
         $extention  = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/categoryimage/', $filename);
         $category->image = $filename;
      }
       
            
        if($request->hasfile('category_icon')){
           
            $filepath_icon ='uploads/categoryicon/'.$category->icon;
            if(File::exists($filepath_icon)){
                File::delete($filepath_icon);
            }



         $icon_file =$request->file('category_icon');
         $icon_extention  = $icon_file->getClientOriginalExtension();
         $icon_filename = time().'.'.$icon_extention;
         $icon_file->move('uploads/categoryicon/', $icon_filename);
         $category->icon = $icon_filename;
      }




        $category->status = $request->input('status') == true ? '1':'0';  //0=show 1=hide
        $category->update();

         return redirect()->back()->with('status','Category Update successfully.');



    }

    public function delete($id){
        $category = Categories::find($id);
        $category->status='3'; //delete
        $category->update();

        return redirect()->back()->with('status','Category Deleted successfully.');

    }
    public function deleterecord(){
     
        $category = Categories::where('status','3')->get();

        return view('admin.collection.category.delete')->with('category',$category); ;


    }
    public function deleterestore($id){
        $category = Categories::find($id);
        $category->status='0'; //restore
        $category->update();

        return redirect('category')->with('status','Category data restored.');

      
    }
}
