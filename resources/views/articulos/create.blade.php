
@extends('layouts.plantillaBase')

@section('contenido')

    <h1>CREAR REGISTRO</h1>

    <form action="/articulos" method="POST">

        @csrf()

        <div class="mb-3">
            <label for="" class="form-label">Código</label>
            <input type="text" id="lsbn" name="lsbn" class="form-control" tabindex="1">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Titulo</label>
            <input type="text" id="titulo" name="titulo" class="form-control" tabindex="2">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Editorial</label>
            <input type="number" id="editorial" name="editorial" class="form-control" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Autor</label>
            <input type="number" id="autor" name="autor" class="form-control" tabindex="3">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Edicion</label>
            <input type="number" id="edicion" name="edicion" class="form-control" tabindex="3">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Fecha</label>
            <input type="number" id="fecha" name="fecha" step="any" value="0.00" class="form-control" tabindex="4">
        </div>

        <a href="/articulos" class="btn btn-secondary" tabindex="5"> Cancelar </a>
        <button type="submit" class="btn btn-primary" tabindex="4"> Guardar </button>

    </form>

@endsection
