<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
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
        return redirect()->route('post.index');

    }
}
