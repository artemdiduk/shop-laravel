<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин: Все Категории</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="http://127.0.0.1:8000">Интернет Магазин</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="http://127.0.0.1:8000">Все товары</a></li>
                    <li class="active"><a href="http://127.0.0.1:8000/categories">Категории</a>
                    </li>
                    <li><a href="http://127.0.0.1:8000/basket">В корзину</a></li>
                    <li><a href="http://127.0.0.1:8000/reset">Сбросить проект в начальное состояние</a></li>
                    <li><a href="http://127.0.0.1:8000/locale/en">en</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">₽<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://127.0.0.1:8000/currency/RUB">₽</a></li>
                            <li><a href="http://127.0.0.1:8000/currency/USD">$</a></li>
                            <li><a href="http://127.0.0.1:8000/currency/EUR">€</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://127.0.0.1:8000/login">Войти</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="starter-template">
            <div class="panel">
                <a href="http://127.0.0.1:8000/mobiles">
                    <img src="http://localhost/storage/categories/mobile.jpg">
                    <h2>Мобильные телефоны</h2>
                </a>
                <p>
                    В этом разделе вы найдёте самые популярные мобильные телефонамы по отличным ценам!
                </p>
            </div>
            <div class="panel">
                <a href="http://127.0.0.1:8000/portable">
                    <img src="http://localhost/storage/categories/portable.jpg">
                    <h2>Портативная техника</h2>
                </a>
                <p>
                    Раздел с портативной техникой.
                </p>
            </div>
            <div class="panel">
                <a href="http://127.0.0.1:8000/appliances">
                    <img src="http://localhost/storage/categories/appliance.jpg">
                    <h2>Бытовая техника</h2>
                </a>
                <p>
                    Раздел с бытовой техникой
                </p>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>Категории товаров</p>
                    <ul>
                        <li><a href="http://127.0.0.1:8000/mobiles">Мобильные телефоны</a></li>
                        <li><a href="http://127.0.0.1:8000/portable">Портативная техника</a></li>
                        <li><a href="http://127.0.0.1:8000/appliances">Бытовая техника</a></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <p>Самые популярные товары</p>
                    <ul>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
   
</body>

</html>
