@extends('adminlte::page')

@section('title', 'Edufree Panel administrador')

@section('content_header')
    <h1>Lista de Materias</h1>

    @can('admin.categories.create')
        <a class="btn btn-primary float-right" href="{{ route('admin.categories.create') }}">
            Agregar Materias
        </a>
    @endcan

@stop

@section('content')
    <p>Bienvenido al panel de administracion de Edufree </p>
    <p>Lista Materias</p>

    @if (session('info'))
        <div class="alert alert-success">
            <strong>
                {{ session('info') }}
            </strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td width="10px">

                                @can('admin.categories.edit')
                                    <a href="{{ route('admin.categories.edit', $category) }}"
                                        class="btn btn-primary btn-sm">Editar</a>
                                @endcan

                            </td>
                            <td width="10px">

                                @can('admin.categories.destroy')
                                    <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                @endcan

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop
