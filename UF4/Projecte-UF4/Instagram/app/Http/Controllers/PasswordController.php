<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function updatePassword (Request $req){
        $user =\Auth::user();

        /*$validate = $this->validate($req, [
            "password"=>"required|string|min:8",
            "password_confirmation"=>"required|string|min:8"
        ]);*/

        $passwd = $req->input("password");
        $user->password=Hash::make($passwd);
        $user->update();
        return redirect()->route("password.index")
                         ->with(["message"=>$req]);
    }

    public function indexPassword(){
        return view("passwd",["message"=>"hola"]);
    }
}
