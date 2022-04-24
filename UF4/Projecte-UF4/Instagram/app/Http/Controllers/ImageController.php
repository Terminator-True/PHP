<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

use Facade\FlareClient\Http\Response;

use Illuminate\Support\Facades\Validator;


class ImageController extends Controller{
    public function index(){
        return view("image");
    }
    public function ImageUp(Request $req){
        $image = new Image();
        $id =\Auth::id();
       /* $req->validate([
            'image_path' => 'required|mimes:png,jpg,jpeg|max:2048',
            'description' => ['required', 'string', 'max:255']
          ]);*/

        $image_path = $req->file("image_path");
        $path = explode("/",$image_path->store('images'))[1];
        $description = $req->input("descripcio");
        $createdAt=date("Y-m-d H:i:s");

        $image->user_id=$id;
        $image->description=$description;
        $image->image_path=$path;
        $image->created_at=$createdAt;
        $image->updated_at=$createdAt;

        $image->save();
        return redirect()->route("image.up")
                         ->with(["message"=>""]);
    }

    public function getImage($filename){
        $file=Storage::disk("images")->get($filename);
        return response($file,200);
     }
}
