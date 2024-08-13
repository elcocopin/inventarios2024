@extends('layouts.app')

@section('titulo', 'Mis productos')

@section('contenido')
    <h1> class="text-blue-500">=LISTA DE PRODUCTOS</h1>
    <UL>
        @foreach ($productos as $producto )
         <li>{{$producto->nombre}} - precio: {{$producto->precio}}</li>

        @endforeach
    </UL>

@endsection