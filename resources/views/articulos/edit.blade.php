

@extends('layouts.plantillaBase')

@section('contenido')

    <h1>EDITAR REGISTRO</h1>

    <form action="/articulos/{{ $articulo->id}}" method="POST">

        @csrf

        @method('PUT')

        <div class="mb-3">
            <label for="" class="form-label">Código</label>
            <input type="text" id="lsbn" name="lsbn" class="form-control" value="{{$articulos->lsbn}}" tabindex="1">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Titulo</label>
            <input type="text" id="titulo" name="titulo" class="form-control" value="{{$articulos->titulo}}" tabindex="2">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Editorial</label>
            <input type="number" id="editorial" name="editorial" class="form-control" value="{{$articulos->editorial}}" tabindex="3">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Autor</label>
            <input type="number" id="autor" name="autor" step="any" class="form-control" value="{{$articulos->autor}}" tabindex="4">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Edicion</label>
            <input type="number" id="edicion" name="edicion" class="form-control" value="{{$articulos->edicion}}" tabindex="3">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Fecha</label>
            <input type="number" id="fecha" name="fecha" step="any" class="form-control" value="{{$articulos->fecha}}" tabindex="4">
        </div>


        <a href="/articulos" class="btn btn-secondary" tabindex="5"> Cancelar </a>
        <button type="submit" class="btn btn-primary" tabindex="4"> Guardar </button>

    </form>

@endsection
