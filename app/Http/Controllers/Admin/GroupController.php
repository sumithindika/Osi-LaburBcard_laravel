<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Groups;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index(){
        $group = Groups::where('status','!=','2')->get();
        return view('admin.collection.group.index')->with('group',$group);

    }


    public function viewpage(){

        return view('admin.collection.group.create');

    }


    public function store(Request $request){
         $group = new Groups();
         $group->url = $request->input('url');
         $group->name = $request->input('name');
       
         $group->description = $request->input('description');
              
         if($request->input('status') == true){

            $group-> status = "1";

         }

         else{

            $group-> status = "0";

         }

        $group ->save();
       
        return redirect()->back()->with('status','Group Data added successfully.');
        

    }
    
    public function edit($id){

       $group = Groups::find($id);

       return view('admin.collection.group.edit')->with('group',$group);
    }



    public function update(Request $request,$id){
        
        $group = Groups::find($id);
       
        $group->url = $request->input('url');
        $group->name = $request->input('name');
       
        $group->description = $request->input('description');
        $group->status = $request->input('status') == true ? '1' : '0';
        $group->update();
        return redirect()->back()->with('status','Group  Update successfully');
        
    }

    public function delete($id){

        $group = Groups::find($id);
         $group->status = "2";   //0=>show , 1=>hide, 2=>delete
         $group->update();
         return redirect()->back()->with('status','Group Data Deleted');  
     }
     
    public function deleterecordes(){

        $group = Groups::where('status','2')->get();
        return view('admin.collection.group.delete')->with('group',$group);

     }
 
 
public function deleterestore($id){
    $group = Groups::find($id);
    $group->status = "0";   //0=>show , 1=>hide, 2=>delete
    $group->update();
    return redirect('group')->with('status','Group Data Restored');  



       }


}

