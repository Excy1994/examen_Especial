
@extends('layouts.plantillaBase')

@section('contenido')

   <a href="articulos/create" class="btn btn-primary">CREAR</a>

   <table class="table table-dark table-striped mt-4">
       <thead>
           <tr>
               <th>ID</th>
               <th>CODIGO</th>
               <th>Titulo</th>
               <th>Editorial</th>
               <th>Autor</th>
               <th>Edicion</th>
               <th>Fecha</th>
               <th>BOTONES</th>
               <th>ACCIONES</th>
           </tr>
       </thead>
9
       <tbody>

           @foreach ($articulo as $articulos)
               <tr>

                   <td>{{ $articulos->id }}</td>
                   <td>{{ $articulos->lsbn }}</td>
                   <td>{{ $articulos->titulo}}</td>
                   <td>{{ $articulos->editorial }}</td>
                   <td>{{ $articulos->autor }}</td>
                   <td>{{ $articulos->edicion }}</td>
                   <td>{{ $articulos->fecha }}</td>
                   <td>
                       <div class="btn-group" role="group" aria-label="Basic example">
                           <button type="button" class="btn btn-primary btn-sm">BAJAR</button>
                           <button type="button" class="btn btn-secondary btn-sm">SUBIR</button>
                         </div>
                   </td>

                   <td>
                       <form action="{{ route ('articulos.destroy', $articulo->id) }}" method="POST">

                           @csrf
                           @method('DELETE')

                           <a href="/articulos/{{ $articulo->id }}/edit" class="btn btn-info">Editar</a>
                           <button type="submit" class="btn btn-danger">Eliminar</button>
                       </form>
                   </td>
               </tr>
           @endforeach
       </tbody>
   </table>

@endsection
