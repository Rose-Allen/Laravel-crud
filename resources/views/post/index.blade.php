@extends("layouts.main")
@section('title','Все посты ')
@section("content")

    <a href="{{route("post.create")}}" class="btn btn-success  mb-3"><i class="fa-solid fa-plus "></i></a>
        <table class="table table-dark table-striped table-hover ">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Заголовок</th>
                <th scope="col">Текст</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td class="table-buttons">
                    <a href="#" class="btn btn-success"><i class="fa-solid fa-eye "></i></a>
                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-pen "></i></a>
                    <form action="#" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fa-solid fa-trash "></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>

        </table>

@endsection
