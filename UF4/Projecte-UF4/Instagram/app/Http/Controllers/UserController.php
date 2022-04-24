<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

use App\Models\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function update(Request $req){
        $user =\Auth::user();
        $id =\Auth::id();
        $image_path = $req->file("image_path");
        if ($image_path) {
            $path = explode("/",$image_path->store('avatars'));
            $user->image=end($path);

        }

        $validate = $this->validate($req, [
            "name"=>["required","string","max:255"],
            "surname"=>["required","string","max:255"],
            "nick"=>"required|string|max:255|unique:users,nick, ".$id,
            "email"=>"required|string|max:255|unique:users,email, ".$id,
        ]);

        $name = $req->input("name");
        $surname = $req->input("surname");
        $nick = $req->input("nick");
        $email = $req->input("email");

        $user->name=$name;
        $user->surname=$surname;
        $user->nick=$nick;
        $user->email=$email;

        $user->update();

        return redirect()->route("user.index")
                         ->with(["message"=>"Usuari actualitzat!"]);
    }


    public function getImage($filename){
        $file=Storage::disk("avatars")->get($filename);
        return response($file,200);
     }


    public function index(){
       return view("user");
    }

    public function getUserName($username){
        $users=User::all();
        return response($users,200);
     }
}
