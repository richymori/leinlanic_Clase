@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">EDITAR NACIONALIDAD</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('nacionalidades', $nacionalidad->id)}}" method="POST" role="form">
                        @csrf()
                        @method('PATCH')
                        <div class="form-group">
                            <label for="">Nombre de la Nacionalidad</label>
                            <input value="{{$nacionalidad->nacionalidad}}" name="nacionalidad" type="text" class="form-control" id="nacionalidad" placeholder="agregue nacionalidad">
                        </div>
                        <a href="/nacionalidades/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardad</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
