<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prison2;

class apicontroller2 extends Controller
{
    public function save(Request $request)
    {
        $prisons = new Prison2();
        $prisons->fname = $request->input('fname');
        $prisons->mname = $request->input('mname');
        $prisons->lname = $request->input('lname');
        $prisons->age = $request->input('age');
        $prisons->sex = $request->input('sex');
        $prisons->height = $request->input('height');
        $prisons->face_color = $request->input('face_color');
        $prisons->education_level = $request->input('education_level');
        $prisons->region = $request->input('region');
        $prisons->crime_type = $request->input('crime_type');
        $prisons->parent_phone = $request->input('parent_phone');

        
        $prisons->save();
        return "saved seccesfully";
    }

    public function prison_update(Request $request)
    {
        $prisons = Prison2::find($request->id);
        $prisons->fname = $request->fname;
        $prisons->mname = $request->mname;
        $prisons->lname = $request->lname;
        $prisons->age = $request->age;
        $prisons->sex = $request->sex;
        $prisons->height = $request->height;
        $prisons->face_color = $request->face_color;
        $prisons->education_level = $request->education_level;
        $prisons->region = $request->region;
        $prisons->crime_type = $request->crime_type;
        $prisons->parent_phone = $request->parent_phone;

        $prisons->save();
        return "updated succesfully";
    }
    
    public function delete_by_id($id)
   {
         Prison2::where('id',$id)->delete();
      return "deleted";
         
       
   }
  
   public function getprison()
   {
       $prisons = new Prison2();
       return $prisons->get();
   }
  


   function getById($id){
           $prisons=Prison2::where('id',$id)->first();
           return $prisons;
       }
}
