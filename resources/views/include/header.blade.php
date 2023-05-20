<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('index') }}">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="http://127.0.0.1:8000">Все товары</a></li>
                <li><a href="{{route('categories') }}">Категории</a>
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