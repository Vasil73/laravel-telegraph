@extends('layout.app')
@section('title'){{ $data->title }}@endsection
@section('content')
    <div class="col-8">
        <h2 class="mb-4">{{ $data->title }}</h2>
        <div class="alert alert-info">
            <p>{{ $data->email }} - {{ $data->author }}</p>
            <p>{{ $data->text }}</p>
            <p><small>{{ $data->created_at }}</small></p>
            <div class="d-flex justify-content-between">
                <a href="{{ route ('form-update', $data->id) }}">
                    <button class="btn btn-warning">Редактировать пост</button>
                </a>
                <a href="{{ route ('form-delete', $data->id) }}">
                    <button class="btn btn-danger">Удалить пост</button>
                </a>
            </div>
        </div>
    </div>
@endsection
