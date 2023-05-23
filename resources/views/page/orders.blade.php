@extends('base')
@section('title')
 Интернет Магазин
@endsection
@section('content')
        <div class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h1>Заказы</h1>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Имя
                                    </th>
                                    <th>
                                        Телефон
                                    </th>
                                    <th>
                                        Когда отправлен
                                    </th>
                                    <th>
                                        Сумма
                                    </th>
                                    <th>
                                        Действия
                                    </th>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
@endsection

