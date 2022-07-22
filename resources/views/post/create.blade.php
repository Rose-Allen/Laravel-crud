@extends("layouts.main")
@section('title','Создание Поста')
@section("content")
<div class="row">
    <form method="post" action="{{route("post.store")}}">
        @csrf
        <div class="mb-3">
            <label for="post-title" class="form-label">Название</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label for="post-title" class="form-label">Tекст</label>
            <textarea type="text" name="content" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Добавить пост</button>
    </form>
</div>
</div>
@endsection
