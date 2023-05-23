<!doctype html>
<html lang="en">
@include('include/head')

<body>
    @include('include/header')
    <div class="container">
        @yield('content')
    </div>
    @include('include/footer')

</body>

</html>
