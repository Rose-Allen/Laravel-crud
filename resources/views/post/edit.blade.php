@extends("layouts.main")
@section('title','Редактирование Поста')
@section("content")
    <div class="row">
        <form method="post" action="{{route('post.update', $post->id)}}">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="post-title" class="form-label">Название</label>
                <input type="text" name="title" class="form-control" value="{{$post->title}}">
            </div>
            <div class="mb-3">
                <label for="post-title" class="form-label">Tекст</label>
                <textarea type="text" name="content" class="form-control" rows="3">{{$post->content}}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Редактирование поста</button>
        </form>
    </div>
    </div>
@endsection
