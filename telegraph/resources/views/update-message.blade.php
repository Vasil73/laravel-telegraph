
@extends('layout.app')
@section('title')Обновление поста@endsection
@section('content')
    <h1 class="mb-5">Обновление поста</h1>

    <form class="" action="{{ route ('form-update-submit', $data->id) }}" method="post">
        @csrf
        <input class="text-success form-control mb-3" type="text" name="author" id="author"
               value="{{ $data->author }}" placeholder="Ваше имя" >
        <input class="text-success form-control mb-3" type="text" name="title" id=title"
               value="{{ $data->title }}" placeholder="Заголовок поста" >
        <input class="text-success form-control mb-3" type="text" name="email"  id="email"
               value="{{ $data->email }}" placeholder="Ваш email">
        <textarea class="text-success form-control mb-4" name="text" id="text">{{ $data->text }}</textarea>
        <button class="btn btn-outline-success" type="submit">Обновить сообщение</button>
    </form>
@endsection
