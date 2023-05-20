<!doctype html>
<html lang="en">

    @include('include/head')

<body>
    @include('include/header')

    <div class="container">
        <div class="starter-template">
            <h1>{{$category->name}}</h1>
            <p>{{$category->description}}</p>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="http://localhost/storage/products/iphone_x.jpg" alt="iPhone X">
                        <div class="caption">
                            <h3>iPhone X</h3>
                            <h4>Цвет: Белый</h4>
                            <h4>Внутренняя память: 32гб</h4>
                            <p>50255 ₽</p>
                            <p>
                            <form action="http://127.0.0.1:8000/basket/add/1" method="POST">
                                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                <a href="http://127.0.0.1:8000/mobiles/iphone_x/1" class="btn btn-default"
                                    role="button">Подробнее</a>
                                <input type="hidden" name="_token" value="uXDpoM0kq6L74XDtRCufa5u5pr7WpDHHDa6lkZ9e">
                            </form>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="http://localhost/storage/products/iphone_x.jpg" alt="iPhone X">
                        <div class="caption">
                            <h3>iPhone X</h3>
                            <h4>Цвет: Белый</h4>
                            <h4>Внутренняя память: 64гб</h4>
                            <p>55573 ₽</p>
                            <p>
                            <form action="http://127.0.0.1:8000/basket/add/2" method="POST">
                                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                <a href="http://127.0.0.1:8000/mobiles/iphone_x/2" class="btn btn-default"
                                    role="button">Подробнее</a>
                                <input type="hidden" name="_token" value="uXDpoM0kq6L74XDtRCufa5u5pr7WpDHHDa6lkZ9e">
                            </form>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="http://localhost/storage/products/iphone_x.jpg" alt="iPhone X">
                        <div class="caption">
                            <h3>iPhone X</h3>
                            <h4>Цвет: Черный</h4>
                            <h4>Внутренняя память: 32гб</h4>
                            <p>52780 ₽</p>
                            <p>
                            <form action="http://127.0.0.1:8000/basket/add/3" method="POST">
                                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                <a href="http://127.0.0.1:8000/mobiles/iphone_x/3" class="btn btn-default"
                                    role="button">Подробнее</a>
                                <input type="hidden" name="_token" value="uXDpoM0kq6L74XDtRCufa5u5pr7WpDHHDa6lkZ9e">
                            </form>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="http://localhost/storage/products/iphone_x.jpg" alt="iPhone X">
                        <div class="caption">
                            <h3>iPhone X</h3>
                            <h4>Цвет: Черный</h4>
                            <h4>Внутренняя память: 64гб</h4>
                            <p>15793 ₽</p>
                            <p>
                            <form action="http://127.0.0.1:8000/basket/add/4" method="POST">
                                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                <a href="http://127.0.0.1:8000/mobiles/iphone_x/4" class="btn btn-default"
                                    role="button">Подробнее</a>
                                <input type="hidden" name="_token" value="uXDpoM0kq6L74XDtRCufa5u5pr7WpDHHDa6lkZ9e">
                            </form>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="http://localhost/storage/products/iphone_x.jpg" alt="iPhone X">
                        <div class="caption">
                            <h3>iPhone X</h3>
                            <h4>Цвет: Серебристый</h4>
                            <h4>Внутренняя память: 32гб</h4>
                            <p>34474 ₽</p>
                            <p>
                            <form action="http://127.0.0.1:8000/basket/add/5" method="POST">
                                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                <a href="http://127.0.0.1:8000/mobiles/iphone_x/5" class="btn btn-default"
                                    role="button">Подробнее</a>
                                <input type="hidden" name="_token" value="uXDpoM0kq6L74XDtRCufa5u5pr7WpDHHDa6lkZ9e">
                            </form>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="http://localhost/storage/products/iphone_x.jpg" alt="iPhone X">
                        <div class="caption">
                            <h3>iPhone X</h3>
                            <h4>Цвет: Серебристый</h4>
                            <h4>Внутренняя память: 64гб</h4>
                            <p>47356 ₽</p>
                            <p>
                            <form action="http://127.0.0.1:8000/basket/add/6" method="POST">
                                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                <a href="http://127.0.0.1:8000/mobiles/iphone_x/6" class="btn btn-default"
                                    role="button">Подробнее</a>
                                <input type="hidden" name="_token" value="uXDpoM0kq6L74XDtRCufa5u5pr7WpDHHDa6lkZ9e">
                            </form>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('include/footer')

</body>

</html>
