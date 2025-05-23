@extends('layouts.app')
@section('content')
<div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('ambientes.index') }}" class="btn btn-secondary mb-2">Volver</a>
        </div>
        <div class="col-md-4">
            <form action="{{ route('ambientes.store') }}" method="POST">
                @csrf
                <label for="" class="form-control-label">Nombre del ambiente</label>
                <input type="text" class="form-control" id="nom_amb" name="nom_amb" value="">
                @error('nom_amb')
                <small class="text-danger">{{$message}}</small><br>
                @enderror
                
                <label for="" class="form-control-label">Capacidad del ambiente</label>
                <input type="number" class="form-control" id="capacidad_amb" name="capacidad_amb" value="">
                @error('capacidad_amb')
                <small class="text-danger">{{$message}}</small><br>
                @enderror
                
                <label for="" class="form-control-label">Piso del ambiente</label>
                <input type="number" class="form-control" id="piso_amb" name="piso_amb" value="">
                @error('piso_amb')
                <small class="text-danger">{{$message}}</small><br>
                @enderror
                <button type="submit" class="btn btn-primary mt-2">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection