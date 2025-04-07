@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-success text-center">CRUD AMBIENTES</h2>
            <a href="{{ route('ambientes.create') }}" class="btn btn-primary mb-3" style="padding: 10px">Agregar Ambiente</a>  
            
        </div>
        <div class="col-md-15">
        <table class="table table-bordered" style="border: 2px">
            <thead>
                <tr class="text-center">
                    <th style="width: 15%">Código</th>
                    <th style="width: 30%">Nombre</th>
                    <th style="width: 15%">Capacidad</th>
                    <th style="width: 10%;">Piso</th>
                    <th style="width: 25%;">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ambientes as $ambiente)
                    <tr>
                        <td class="text-center" >{{ $ambiente->cod_amb }}</td>
                        <td class="text-center">{{ $ambiente->nom_amb }}</td>
                        <td class="text-center">{{ $ambiente->capacidad_amb }}</td>
                        <td class="text-center">{{ $ambiente->piso_amb }}</td>
                        <td class="text-center" >
                            <a href="{{ route('ambientes.edit', $ambiente) }}" class="btn btn-success ">Actualizar</a>    
                            <form action="{{ route('ambientes.destroy', $ambiente) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm('Está seguro de eliminar el registro??   ')">Eliminar</button>
                            </form>
                        </td>  
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection