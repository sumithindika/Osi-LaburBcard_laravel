<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Audio;
use App\Models\Categories;
use App\Models\Groups;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index(){
        
        $group = Groups::where('status','0')->get();
        $audio = Audio::where('status','0')->get();
        $audio  = Audio::paginate(2);
        return view('frontend.collection.index')->with('group',$group);


    }
public function groupview($group_url){
      
    $group = Groups::where('url', $group_url)->first();
    $group_id = $group->id;
    $category = Categories::where('group_id',$group_id)->where('status','!=','2')->where('status','0')->get();
    return view('frontend.collection.category')->with('category',$category)->with('group',$group);



}
public function categoryview($group_url,$cate_url){

    $category = Categories::where('url',$cate_url)->first();
     $category_id = $category->id;
      
     $subcategory = Subcategory::where('category_id',$category_id)->where('status','!=','2')->where('status','0')->get();

     return view('frontend.collection.sub-category')->with('category',$category)
      ->with('subcategory', $subcategory);
    


}
public function subcategoryview($group_url, $cate_url, $subcate_url){
    $subcategory = Subcategory::where('url',$subcate_url)->first();
    $subcategory_id = $subcategory->id;

    $audio = Audio::where('sub_category_id',$subcategory_id)->where('status','!=','2')->where('status','0')->get();

    return view('frontend.collection.product')->with('audio',$audio)
     ->with('subcategory', $subcategory);
    
  }


}
