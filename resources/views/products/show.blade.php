@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h2>
            {{$product->name}}
            <a href="{{route('products.show', $product->id)}}" class="btn btn-default pull-right">EDITAR</a>
        </h2>
        <p> {{$product->short}}</p>
        {!! $product->body !!}
    </div>
    <div class="col-sm-4">
        Mensaje
    </div>
@endsection