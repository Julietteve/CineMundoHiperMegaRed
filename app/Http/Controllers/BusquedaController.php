<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use App\Actor;

class BusquedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
     {
       if ($request->has('q')) {
           $peliculas = Pelicula::where('title', 'like', '%' . $request->get('q') . '%')
               ->paginate(10)
               ->appends($request->only('q'));
       }

       else {
           $peliculas = Pelicula::paginate(10)->appends($request->only('q'));
       }

       if ($request->has('q')) {
           $actores = Actor::where('first_name', 'like', '%' . $request->get('q') . '%')
               ->paginate(10)
               ->appends($request->only('q'));
       }

       else {
           $peliculas = Actor::paginate(10)->appends($request->only('q'));
       }

       return view('busqueda.index', [
           'pelicula' => $peliculas,
           'actor'=> $actores,
       ]);
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
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
