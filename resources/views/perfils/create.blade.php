@extends('layout')

@section('content')
    <section class="content-header">
        <h1>
            Perfil
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'perfils.store']) !!}

                        @include('perfils.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
