@extends("layouts.app")

@section("titulo", "Detalle del Producto")

@section("contenido")
    <h1>Detalle del Producto</h1>
    <p>Nombre: {{$productos->nombre}}</p>
    <p>Precio: ${{$productos->precio}}</p>
    <p>Descripción: {{$productos->descripcion }}</p>
@endsection