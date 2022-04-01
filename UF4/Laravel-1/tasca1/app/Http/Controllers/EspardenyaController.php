<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EspardenyaController extends Controller
{
    public $espardenyes=[
        0 => [
            "marca"=>"Adidas",
            "model"=> "Stan Smith",
            "color"=> "Blanc",
            "stock"=> True
        ],
        1 => [
            "marca"=>"GUCCI",
            "model"=> "GG",
            "color"=> "Blanc",
            "stock"=> False
        ],
        2 => [
            "marca"=>"Balenciaga",
            "model"=> "Speed",
            "color"=> "Negre",
            "stock"=> False
        ]
    ];
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('espardenyes.index')
        ->with('espardenyes',$this->espardenyes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        return view('espardenyes.show')
        ->with('espardenya',$this->espardenyes[$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
