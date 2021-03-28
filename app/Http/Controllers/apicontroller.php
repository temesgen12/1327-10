<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prison1;

class apicontroller extends Controller
{
    public function save(Request $request)
    {
        $prisons = new Prison1();
        $prisons->fname = $request->input('fname');
        $prisons->lname = $request->input('lname');
        $prisons->zone = $request->input('zone');
        
    
        $prisons->save();
        return "saved seccesfully";
    }


   public function prison_update(Request $request)
    {
        $prisons = Prison1::find($request->id);
        $prisons->fname = $request->fname;
        $prisons->lname = $request->lname;
        $prisons->zone = $request->zone;
        $prisons->save();
        return "updated succesfully";
    }
    
    public function delete_by_id($id)
   {
         Prison1::where('id',$id)->delete();
      return "deleted";
         
       
   }
  
   public function getprison()
   {
       $prisons = new Prison1();
       return $prisons->get();
   }
  


   function getById($id){
           $prisons=Prison1::where('id',$id)->first();
           return $prisons;
       }
}
