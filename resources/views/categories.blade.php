<!doctype html>
<html lang="en">

@include('include/head')

<body>

    @include('include/header')
    <div class="container">
        <div class="starter-template">
            @foreach ($categories as $category)
                <div class="panel">
                    <a href="{{$category->code}}">
                        <img src="http://localhost/storage/categories/mobile.jpg">
                        <h2>{{$category->name}}</h2>
                    </a>
                    <p>
                        {{$category->description}}
                    </p>
                </div>
            @endforeach

        </div>
    </div>

    @include('include/footer')

</body>

</html>
