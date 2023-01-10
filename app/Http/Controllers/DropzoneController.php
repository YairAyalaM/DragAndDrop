<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropzoneController extends Controller
{
    //To render html form
    public function index(){
        return view('index');
    }
    //To upload file from client to server
    public function store(Request $req){
        $image = $req->file('file');
        $imageName = time().rand(1,100).'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        return response()->json(['success' => $imageName]);
    }
}
