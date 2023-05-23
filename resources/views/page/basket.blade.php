@extends('base')

@section('title')
    basket
@endsection

@section('content')
    <h1>asdas</h1>
    <p>asdasd</p>
    <div class="panel">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ss</th>
                    <th>22</th>
                    <th>3121</th>
                    <th>121212</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <a href="/">
                            <img height="56px" src="/">
                           name
                        </a>
                    </td>
                    <td><span class="badge">1</span>
                        <div class="btn-group form-inline">
                            <form action="1" method="POST">
                                <button type="submit" class="btn btn-danger" href=""><span
                                        class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                @csrf
                            </form>
                            <form action="/" method="POST">
                                <button type="submit" class="btn btn-success" href=""><span
                                        class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                @csrf
                            </form>
                        </div>
                    </td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td colspan="3">1</td>
                    <td>1</td>
                </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success" href="1">1</a>
        </div>
    </div>
@endsection
