@extends('layouts.main')
@section('title','Просмотр поста по id ')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3>{{ $post->title  }}</h3>
            <p>{{$post->content  }}</p>
        </div>
    </div>
    <div class="mt-5">
        <a href="{{route('post.index')}}" class="btn btn-danger">Назад</a>
    </div>
@endsection
