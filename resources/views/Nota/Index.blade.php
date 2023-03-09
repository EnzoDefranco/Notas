@extends('layouts.master')
@section('content')
    {{-- Filas de bootstrap --}}
    <div class="row"> 
            {{-- Columnas de bootstrap --}}
        <div class="col">
            <h4>Notas</h4>
        </div>
    </div>
    <div class="row">
        @foreach ($notas as $nota)
        {{-- Uso el card de bootstrap  --}}
        <div class="card" style="width: 15rem;">
            <div class="card-body">
              <h5 class="card-title">{{ $nota->titulo }}</h5>
              <p class="card-text">{{ $nota->contenido }}</p>
              <a href="{{ route('notas.destroy',$nota) }}" class="card-link">Borrar</a>
            </div>
          </div>
        @endforeach
    </div>
    {{-- Este es un modal para agregar nota --}}
    <a   class="btn-flotante" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar nota</a>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva nota</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <form action="{{ route('notas.store') }}" class="form" method="POST" >
                    @csrf
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" name="titulo" id="titulo" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="titulo">Descripcion</label>
                            <input type="text" name="contenido" id="descripcion" class="form-control">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        {{-- <input type="submit" class="btn btn-primary" value="Guardar"> --}}
                   </form>
                </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

@endsection