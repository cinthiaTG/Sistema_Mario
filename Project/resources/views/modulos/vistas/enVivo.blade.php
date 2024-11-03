@extends('layouts.plantilla')
@section('styles')
<link rel="stylesheet" href="{{ asset('style.css') }}">

@endsection
@section('content')



    <h2>Hola @Nombre del usuario</h2>
    <h3>En Vivo</h3>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/HHCRtTSfC_8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    



@endsection