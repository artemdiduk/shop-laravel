<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        {{-- <img src="http://localhost/storage/products/iphone_x.jpg" alt="iPhone X"> --}}
        <div class="caption">
            <h3>{{$product->name}}</h3>
            <h4>Цвет: Белый</h4>
            <h4>Внутренняя память: 32гб</h4>
            <p>{{$product->price}}</p>
            <p>
            <form action="http://127.0.0.1:8000/basket/add/1" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="{{route('product', [$category, $product])}}" class="btn btn-default"
                    role="button">Подробнее</a>
                <input type="hidden" name="_token" value="uXDpoM0kq6L74XDtRCufa5u5pr7WpDHHDa6lkZ9e">
            </form>
            </p>
        </div>
    </div>
</div>