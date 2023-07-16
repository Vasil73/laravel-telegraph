
@extends('layout.app')
@section('title')Обновление поста@endsection
@section('content')
    <h1 class="mb-5">Обновление поста</h1>

    <form class="" action="{{ route ('contact-update-submit', $data->id) }}" method="post">
        @csrf
        <input class="text-success form-control mb-3" type="text" name="name" id="name" value="{{ $data->name }}" placeholder="Ваше имя" >
        <input class="text-success form-control mb-3" type="text" name="subject" id=subject" value="{{ $data->subject }}" placeholder="Заголовок поста" >
        <input class="text-success form-control mb-3" type="text" name="email"  id="email" value="{{ $data->email }}" placeholder="Ваш email">
        <textarea class="text-success form-control mb-4" name="message" id="message" placeholder="Редактировать пост">
            {{ $data->message }}
        </textarea>
        <button class="btn btn-outline-success" type="submit">Обновить сообщение</button>
    </form>
@endsection
