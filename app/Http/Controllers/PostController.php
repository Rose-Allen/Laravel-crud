<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\Post;
use http\Env\Url;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view("post.index", compact('posts'));
    }
    public function create(){
        return view("post.create");
    }
    public function store(PostRequest $request){
        $data = $request->validated();
        Post::create($data);
        return redirect()->route('post.index')->with('success', "Запись успешно добавлена");

    }
    public function show(Post $post){
        return view("post.show", compact('post'));
    }
    public function edit(Post $post){
        return view('post.edit', compact('post'));
    }
    public function update(UpdateRequest $request, Post $post){
        $data = $request->validated();
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }
    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('post.index')->with('success', "Запись успешно удалена");;
    }
}
