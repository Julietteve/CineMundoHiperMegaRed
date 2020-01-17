<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $actores = Actor::paginate(4);

      $vac = compact("actores");

      return view ("actores.index", $vac);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("actores.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

        $reglas = [
          "first_name"=>"string|min:2",
          "last_name"=>"string|min:2",
          "rating"=>"numeric|min:0|max:10",
          "bio"=>"string|min:2",
          "photo"=> "file",
        ];

        $mensajes = [
          "string"=>"Debes colocar texto aqui",
          "numeric"=>"Debes colocar un número aqui",
          "min"=>"Se requiere una extensión de :min caracteres",
          "max"=>"Se requiere una extensión de :max caracteres",
          "file"=>"Cargar una imagen con extensión .jpg .jpeg .png",
        ];

        $this->validate($req,$reglas,$mensajes);

        $nuevoActor= new Actor();

        $ruta=$req->file("photo")->store("public");
        $archivo=basename($ruta);

        $nuevoActor->photo= $archivo;
        $nuevoActor->first_name= $req["first_name"];
        $nuevoActor->last_name= $req["last_name"];
        $nuevoActor->rating= $req["rating"];
        $nuevoActor->bio= $req["bio"];

        $nuevoActor->save();

        return redirect ("/actores");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Actor $id)
    {
      return view ('actores.show')->with('Actor',$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy(Request $request)
    {
      $id= $request['id'];

        $postDeleted= Actor:: find($id);

        $postDeleted->delete();

        return redirect('/actores');
    }
}
