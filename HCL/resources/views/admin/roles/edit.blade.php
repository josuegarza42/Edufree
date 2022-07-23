@extends('adminlte::page')

@section('title', 'Edufree Panel administrador')

@section('content_header')
    <h1>Edufree Panel Administrador</h1>
    <p>Editar rol</p>
@stop

@section('content')
    <p>Bienvenido al panel de administracion de Edufree </p>

    @if (session('info'))
        <div class="alert alert-success">
            <strong>
                {{ session('info') }}
            </strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'put']) !!}
            @include('admin.roles.partials.form')
            {!! Form::submit('Actualizar role', ['class' => 'btn btn-warning']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop

{{-- @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}