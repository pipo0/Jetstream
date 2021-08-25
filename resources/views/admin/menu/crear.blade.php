@extends("theme.$theme.layout")
@section('titulo')
   Sistema Menus
@endsection

@section('contenido')
<div class="row">
    
    <div class="col-lg-12">
        @include('admin.includes.form-error')
        @include('admin.includes.mensaje')
        <div class="card card-danger">
            <div class="card-header with-border">
                <h3 class="card-title">Crear menus</h3>
            </div>
            <form action="{{route('guardar_menu')}}" id="form-general" class="form-horizontal" method="POST">
               @csrf
                <div class="card-body">
                    @include('admin.menu.form')
                </div>
                <div class="card-footer">
                    @include('admin.includes.boton-form-crear')
                </div>
            </form>
        </div>
    </div>
</div>
@endsection