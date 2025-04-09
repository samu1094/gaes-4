@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('centros.update', $centro) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="" class="form-control-label">Nombre del Centro</label>
                <input type="text" class="form-control" id="nom_centro" name="nom_centro" value="{{ $centro->nom_centro }}">
                @error('nom_centro')
                <small class="text-danger">{{$message}}</small><br>
                @enderror
                
                <label for="" class="form-control-label">Ciudad del centro</label>
                <input type="text" class="form-control" id="ciudad_centro" name="ciudad_centro" value="{{ $centro->ciudad_centro }}">
                @error('ciudad_centro')
                <small class="text-danger">{{$message}}</small><br>
                @enderror
                <br>
                <button type="submit" class="btn btn-primary mt-2">Guardar</button>
            </form>
            <div class="col-md-12">
                <br>
                <a href="{{ route('centros.index') }}" class="btn btn-secondary mb-2">Volver</a>
            </div>
        </div>
    </div>
</div>
@endsection