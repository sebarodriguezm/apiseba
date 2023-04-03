<?php

namespace App\Http\Controllers;

use App\Models\Files;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    function upload(Request $request){
        $file=new Files;
        $file->files=$request->file('file')->store('apiFile');
        $result=$file->save();
        if($result){
            return ["result"=>"Upload Success"];
        }else{
            return ["result"=>"Upload failed"];
        }
    }
}
