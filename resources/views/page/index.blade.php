@extends('base')
@section('title')
 Интернет Магазин
@endsection
@section('content')
    <div class="starter-template">
        <h1>Все товары</h1>
        <div class="row">
            @include('include.card')
        
        </div>
    </div>
@endsection

