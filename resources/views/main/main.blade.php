@extends('base')

@section('menu')
    <ul class="left-menu">
        <li><a class="btn btn-light"><i class="fa fa-archive"></i> каталог</a></li>
        <li>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
            </div>
        </li>
    </ul>

    <ul class="right-menu">
        <li><a class="btn btn-light"><i class="fa fa-user"></i> войти</a></li>
    </ul>
@endsection

@section('base-content')
    Добро пожаловать на сайт
@endsection
