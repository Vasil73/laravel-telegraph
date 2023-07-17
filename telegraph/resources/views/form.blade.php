@extends('layout.app')
@section('title')Форма@endsection
@section('content')
    <h1 class="mb-5">Публикция поста</h1>

        <form class="" action="{{ route ('contact-form') }}" method="post">
            @csrf
            <input class="text-success form-control mb-3" type="text" name="name" placeholder="Ваше имя" id="name">
            <input class="text-success form-control mb-3" type="text" name="subject" placeholder="Заголовок поста" id=subject">
            <input class="text-success form-control mb-3" type="text" name="email" placeholder="Ваш email" id="email">
            <textarea class="text-success form-control mb-4" name="message" id="message" placeholder="Введите сообщение"></textarea>
            <button class="btn btn-outline-success" type="submit">Опубликовать пост</button>
        </form>
@endsection
