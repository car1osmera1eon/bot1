@extends('layout')

@section('content')
    <section class="content-header">
        <h1>
            Perfil
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('perfils.show_fields')
                    <a href="{{ route('perfils.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection