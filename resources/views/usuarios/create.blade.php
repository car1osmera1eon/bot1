@extends('layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Usuario
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'usuarios.store', 'enctype' => 'multipart/form-data']) !!}

                        @include('usuarios.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
