<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function update(Request $req){
        $user=  \Auth::user();
        $id = \Auth::id();
        var_dump($user);
        $validate = $this->validate($req, [
            "name"=>["required","string","max:255"],
            "surname"=>["required","string","max:255"],
            "nick"=>"required|string|max:255|unique:users,nick, ".$id,
            "email"=>"required|string|max:255|unique:users,email, ".$id,

        ]);

        #$name = $req->input("name");
        #$surname = $req->input("surname");
        #$nick = $req->input("nick");
        $email = $req->input("email");

        /*$user->name=$name;
        $user->surname=$surname;
        $user->nick=$nick;*/
        $user->email=$email;

        $user->update();


        return redirect()->route("user.index")
                         ->with(["message"=>"Usuari actualitzat correctament"]);

    }
    public function index(){
       return view("user");
    }
}
