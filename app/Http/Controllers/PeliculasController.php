<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;


class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas = Pelicula::paginate(4);

        $vac = compact("peliculas");

        return view ("peliculas.index", $vac);


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
    public function show(Pelicula $id)
    {
      return view ('peliculas.show')->with('Pelicula',$id);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelicula $id)
    {
        return view ("peliculas.edit")->with('Pelicula',$id);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $req  )
    {
      $pelicula= Pelicula::findOrFail($id);

      $reglas=[
        'title' => 'string|min:1|max:50',
        'rating' => 'numeric|min:0|max:10',
    ];

      $mensajes=[
        "string"=>"Debes colocar texto aqui",
        "numeric"=>"Debes colocar un número aqui",
        "min"=>"Se requiere una extensión de :min caracteres",
        "max"=>"Se requiere una extensión de :max caracteres"
      ];

    $this->validate($req,$reglas,$mensajes);

    $input = $req->all();

    $pelicula->fill($input)->save();

    return redirect ("/peliculas/{$id}")->with('succes', 'Pelicula actualizada!');

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

    public function topFive (){
      $peliculas = Pelicula:: where("rating", ">", 8)
      ->orderBy("rating", 'DESC')
      ->limit(4)
      ->get();

      $vac= compact("peliculas");

      return view ("peliculas.topFive", $vac);
    }

    public function RottenFive (){
      $peliculas = Pelicula:: where("rating", "<", 6)
      ->orderBy("rating", 'ASC')
      ->limit(4)
      ->get();

      $vac= compact("peliculas");

      return view ("peliculas.rottenFive", $vac);
    }
}
