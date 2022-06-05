<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', [
            "posts" => $posts
        ]);
    }

    public function show()
    {

        $request = request();
        $postId = $request->post;
        $post = Post::find($postId); // will return model object


//        $postBuilder = Post::where('id', $postId); // will return eloquent builder object
//        $postBuilder->get(); // will return an array of results
//        $postBuilder->first(); // will return the model post

        return view('posts.show', [
            "post" => $post
        ]);
    }

    public function create()
    {
        $users = User::all();

        return view('posts.create', [
            "users" => $users
        ]);
    }

    public function store()
    {
        $request = request();

        //store in db
        Post::create([
           "title" => $request->title,
           "description" => $request->description,
           "user_id" => $request->user_id
        ]);

        return redirect()->route('posts.index');
    }

    public function edit()
    {
        $users = User::all();
        $request = request();
        $post = Post::find($request->post);

        return view("posts.edit", [
            "users" => $users,
            "post" => $post
        ]);
    }

    public function update()
    {
        $request = request();
        $postId = $request->post;
        $post = Post::find($postId);
        dd($post);

        return redirect()->route("posts.index");
    }
}
