
@extends('layout.app')
@section('title')Ваши сообщения@endsection
@section('content')
    <h2 class="mb-4">Все сообщения</h2>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h4>{{ $el->title }}</h4>
            <p>{{ $el->email }}</p>
            <p><small>{{ $el->created_at }}</small></p>
            <a href="{{ route ('form-data-one', $el->id) }}"><button class="btn btn-warning">Читать пост</button></a>
        </div>
    @endforeach
@endsection
