<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\ Pelicula;

class Movie extends Controller
{
     public function listado(){
      $peliculas = Movie::all();
      return view('peliculas', compact('peliculas'));
    }

    public function detalle($id){
      $pelicula = Movie::find($id);
      return view('detallePelicula', compact('pelicula'));
    }

    public function mostrarFormulario(){
      return view('/agregarPelicula');
    }

    public function agregarPelicula(Request $datos){
      $validaciones = [
        "title" => 'required|min:2',
        "rating" => 'required|numeric|max:10',
        "awards" => 'required|numeric',
        "release_date" => 'required|date',
        "length" => 'required|numeric'
      ];

      $this->validate($datos, $validaciones);

      $peliculaNueva = new Movie;
      $peliculaNueva->title = $datos["title"];
      $peliculaNueva->rating = $datos["rating"];
      $peliculaNueva->awards = $datos["awards"];
      $peliculaNueva->release_date = $datos["release_date"];
      $peliculaNueva->length = $datos["length"];

      $peliculaNueva->save();

      return redirect('/peliculas');
    }
}
