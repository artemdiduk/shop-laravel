@extends('base')
@section('title')
All Category
@endsection
@section('content')
    <div class="starter-template">
        @foreach ($categories as $category)
            <div class="panel">
                <a href="{{ route('category', $category->code) }}">
                    <img src="http://localhost/storage/categories/mobile.jpg">
                    <h2>{{ $category->name }}</h2>
                </a>
                <p>
                    {{ $category->description }}
                </p>
            </div>
        @endforeach

    </div>
@endsection
