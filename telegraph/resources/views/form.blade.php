@extends('layout.app')
@section('title')Форма@endsection
@section('content')
    <h1 class="mb-5">Публикция поста</h1>

        <form class="" action="{{ route ('contact-form') }}" method="post">
            @csrf
            <input class="text-success form-control mb-3" type="text" name="author" placeholder="Ваше имя" id="author">
            <input class="text-success form-control mb-3" type="text" name="title" placeholder="Заголовок поста" id="title">
            <input class="text-success form-control mb-3" type="text" name="email" placeholder="Ваш email" id="email">
            <textarea class="text-success form-control mb-4" name="text" id="text" placeholder="Введите сообщение"></textarea>
            <button class="btn btn-outline-success" type="submit">Опубликовать пост</button>
        </form>
@endsection
