@extends('base')
@section('title')
    {{ $category->name }}
@endsection
@section('content')
    <div class="starter-template">
        <h1>{{ $category->name }}</h1>
        <p>{{ $category->description }}</p>
        <div class="row">
            @foreach ($products as $product)
                @include('include.card', ['product' => $product, 'category' => $category])
            @endforeach
        </div>
    </div>
@endsection
