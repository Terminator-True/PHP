<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FruitaController extends Controller
{
    public $fruites=["poma","pera","taronja","plátan","mango","maduixa","pinya","síndria","llimona","guaiava"];

    public function index(){
        return view('fruita.index')
        ->with('fruita',$this->fruites);
    }
    public function show($f){
        return view('fruita.show')
    ->with('fruita',$this->fruites[array_search($f,$this->fruites)]);
    }

    public function taronges(){
        return view('fruita.taronja');
    }
    public function peres(){
        return view('fruita.pera');

    }
}
