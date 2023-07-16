@extends('layout.app')
@section('title')Домашняя@endsection
@section('content')
<h1>Главная</h1>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection
