<?php

namespace App\Http\Controllers;

use App\Models\Logos;
use Illuminate\Http\Request;

class LogosController extends Controller
{
    public function create(Request $request){
        $images=new Logos();
        $request->validate([
            'image'=>'required|max:1024'
        ]);

        $filename="";
        if($request->hasFile('image')){
            $filename=$request->file('image')->store('post','public');
        }else{
            $filename=Null;
        }
        $images->image=$filename;
        $result=$images->save();
        if($result){
            return response()->json(['success'=>true]);
        }else{
            return response()->json(['success'=>false]);
        }
    }
    public function get()
    {
        $images=Logos::orderBy('id','DESC')->get();
        return response()->json($images);
    }
}
