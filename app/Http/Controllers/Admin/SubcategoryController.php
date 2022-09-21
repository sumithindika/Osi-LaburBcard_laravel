<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class SubcategoryController extends Controller
{
    public function index(){


        $category = Categories::where('status','!=','3')->get();
        $subcategory = Subcategory::where('status','!=','3')->get();

           return view('admin.collection.subcategory.index')
           ->with('subcategory',$subcategory)->with('category',$category); 

    }

    public function store(Request $request){
        $subcategory = new Subcategory();
        $subcategory->category_id = $request->input('category_id');
        $subcategory->url = $request->input('url');
        $subcategory->name = $request->input('name');
        $subcategory->description = $request->input('description');

        if($request->hasfile('image')){

        
            $file =$request->file('image');
            $extention  = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/subcategoryimage/', $filename);
            $subcategory->image = $filename;
         }

        $subcategory->peiority =$request->input('peiority');
        $subcategory->status =$request->input('status')== true ? '1':'0';
        $subcategory->save();
        return redirect()->back()->with('status','SubCategory Saved successfully.');

    }

     public function edit($id){
        $category = Categories::where('status','!=','3')->get();
        $subcategory = Subcategory::find($id);

        return view('admin.collection.subcategory.edit')->with('subcategory',$subcategory)->with('category',$category);

     }

     public function update(Request $request, $id){



        $subcategory = Subcategory::find($id);
        $subcategory->category_id = $request->input('category_id');
        $subcategory->url = $request->input('url');
        $subcategory->name = $request->input('name');
        $subcategory->description = $request->input('description');

        if($request->hasfile('image')){

            
        $filepath_image ='uploads/subcategoryimage/'.$subcategory->image;
        if(File::exists($filepath_image)){
            File::delete($filepath_image);
        }
            $file =$request->file('image');
            $extention  = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/subcategoryimage/', $filename);
            $subcategory->image = $filename;
         }

        $subcategory->peiority =$request->input('peiority');
        $subcategory->status =$request->input('status')==true ? '1':'0';
        $subcategory->update();
        return redirect('sub-category')->with('status','SubCategory Saved successfully.');


     }
     public function delete($id){
        $subcategory = Subcategory::find($id);
        $subcategory->status ='3';
        $subcategory->update();
        return redirect()->back()->with('status','SubCategory data deleted');



     }
     public function deleterecord(){
     
        $subcategory = Subcategory::where('status','3')->get();

        return view('admin.collection.subcategory.delete')->with('subcategory',$subcategory);


    }
    public function deleterestore($id){
        $subcategory = Subcategory::find($id);
        $subcategory->status='0'; //restore
        $subcategory->update();

        return redirect('sub-category')->with('status','SubCategory restore successfully.');

      
    }
}
