@extends('adminlte::page')

@section('title', 'Edufree Panel administrador')

@section('content_header')
    <a href="{{ route('admin.posts.create') }}" class="btn btn-success btn-sm float-right">Nuevo Clase</a>

    <h1>Edufree Panel Administrador</h1>
    <p>Listado de clases</p>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>
                {{ session('info') }}
            </strong>
        </div>
    @endif

    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
