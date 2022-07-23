@extends('adminlte::page')

@section('title', 'Edufree Panel administrador')

@section('content_header')
    <h1>Edufree Panel Administrador</h1>

@stop

@section('content')
<p>Lista de usuarios</p>

@livewire('admin.users-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop