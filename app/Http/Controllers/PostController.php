<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Route;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('user')->orderBy('title')->paginate(5); //por defecto lo deja en ascedente, por lo cual no se lo quise especificar
         return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::get();
        return view('posts.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(
            [
                'title' => 'required|min:5',
                'content' => 'required|min:50'
            ],
            [
                'title.required' => 'The title is required',
                'title.min' => 'The title must be at least 5 characters',
                'content.required' => 'The content is required',
                'content.min' => 'The content must be at least 50 characters'
            ]
        );

        $post = new Post();
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->user()->associate(User::findOrFail($request->get('user')));
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        $users = User::get();
        return view('posts.edit', compact('post', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate(
            [
                'title' => 'required|min:5',
                'content' => 'required|min:50'
            ],
            [
                'title.required' => 'The title is required',
                'title.min' => 'The title must be at least 5 characters',
                'content.required' => 'The content is required',
                'content.min' => 'The content must be at least 50 characters'
            ]
        );

        $post = Post::findOrFail($id);
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->user_id = $request->get('user_id');
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }

        public function newPost()
    {
        $post = new Post();
        $post->title = "Post Modify". rand(1, 500);
        $post->content = "Content post ". rand(1, 500) ." ".Str::random(100);
        $post->save();
    }

        public function editPost($id)
    {
        $postToModify = Post::findOrFail($id);
        $postToModify->title = "Post Modify". rand(1, 500);
        $postToModify->content = "Content post modify ". rand(1, 500) ." ".Str::random(100);
        $postToModify->save();
    }
}
