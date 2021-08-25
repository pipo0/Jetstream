@extends("theme.$theme.layout")
@section('titulo')
Liga Villa Copacabana
@endsection

@section('contenido')
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Choco</h3>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>nombre</th>
                            <th>slug</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permits as $permit)
                        <tr>
                            <td>{{$permit->id}}</td>
                            <td>{{$permit->nombre}}</td>
                            <td>{{$permit->slug}}</td>
                            <td></td>
                        </tr>    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

