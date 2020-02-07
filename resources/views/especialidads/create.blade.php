{{-- @extends('layouts.php') --}}
@extends('layout')

@section('content')
    <section class="content-header">
        <h1>
            Especialidad
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'especialidads.store']) !!}

                        @include('especialidads.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
