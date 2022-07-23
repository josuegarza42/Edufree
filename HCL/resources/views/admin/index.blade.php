@extends('adminlte::page')

@section('title', 'Edufree Panel administrador')

@section('content_header')
    <h1>Edufree Panel Administrador</h1>
@stop

@section('content')
    <div class="container col-xxl-8 ">
        <div class="row flex-lg-row-reverse align-items-center ">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="https://i.ibb.co/qnJLzhv/1.png" class="d-block mx-lg-auto img-fluid"
                    alt="Bootstrap Themes" width="600" height="400" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Hola este es el panel de administración de Edufree</h1>
                <p class="lead">Aqui podras administrar la pagina de Edufree
                    segun los permisos que tengas activados, cualquier problema por favor contactate con el administrador de
                    la pagina.
                </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="#">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Contactar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
