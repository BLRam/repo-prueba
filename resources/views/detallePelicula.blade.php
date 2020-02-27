@extends('layouts.app')

@section('content')
  <h3>{{$pelicula->title}}</h3>
  <ul>
    <li>Premios: {{$pelicula->awards}}</li>
    <li>Rating: {{$pelicula->rating}} / 10</li>
    <li>Estreno: {{$pelicula->release_date}}</li>
    <li>Duración: {{$pelicula->length}} minutos</li>
    @if ($pelicula->genre)
        <li>Genero: {{$pelicula->genre->name}}</li>
      @else
        <li>Genero: No tiene</li>
    @endif
  </ul>
@endsection
