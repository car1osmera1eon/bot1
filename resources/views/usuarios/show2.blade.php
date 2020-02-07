@extends('layout')

@section('content')
    <section class="content-header">
        <h1>
            Usuario
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('usuarios.show_fields')
                    <a href="{{ route('usuarios.editar',['id'=>Auth::user()->id]) }}" class="btn btn-default">Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection