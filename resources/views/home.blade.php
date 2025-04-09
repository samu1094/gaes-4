@extends('layouts.app')

@section('content')
<div >
    <div class="justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if( Auth::user()->cod_tipo_fk == 'A')
                <div class="card-header">{{ __('Bienvenido Administrador!') }}</div>
                @endif
                @if( Auth::user()->cod_tipo_fk == 'F')
                <div class="card-header">{{ __('Bienvenido Funcionario!') }}</div>
                @endif
                @if( Auth::user()->cod_tipo_fk == 'P')
                <div class="card-header">{{ __('Bienvenido Aprendiz!') }}</div>
                @endif
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if( Auth::user()->cod_tipo_fk == 'A')
                {{ __('Opciones de Administrador!')}}
                @endif
                @if( Auth::user()->cod_tipo_fk == 'F')
                {{ __('Opciones de Funcionario!') }}
                @endif
                @if( Auth::user()->cod_tipo_fk == 'P')
                {{ __('Opciones de Aprendiz!')}}
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
