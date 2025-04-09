@extends('layouts.app')
@section('content')
<div>
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-success text-center">CRUD CENTROS</h2>
            <a href="{{ route('centros.create') }}" class="btn btn-primary mb-3" style="padding: 10px">Agregar Centro</a>  
            
        </div>
        <div class="col-md-15">
        <table class="table table-bordered" style="border: 2px">
            <thead>
                <tr class="text-center">
                    <th style="width: 15%">Código</th>
                    <th style="width: 30%">Nombre</th>
                    <th style="width: 15%">Ciudad</th>
                    <th style="width: 25%;">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($centros as $centro)
                    <tr>
                        <td class="text-center" >{{ $centro->cod_centro }}</td>
                        <td class="text-center">{{ $centro->nom_centro }}</td>
                        <td class="text-center">{{ $centro->ciudad_centro }}</td>
                        <td class="text-center" >
                            <a href="{{ route('centros.edit', $centro) }}" class="btn btn-success ">Actualizar</a>    
                            <form action="{{ route('centros.destroy', $centro) }}" method="POST" class="d-inline-block">
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