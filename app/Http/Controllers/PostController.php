<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('tags')->paginate(5);


        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = $request->validate([
            'title'=>'required|unique:posts',
            'text'=>'required',
            'image'=>'image|mimes:jpeg, png, jpg, gif, svg|max:2048'
        ]);

        if (! $request['image'] == null) {
            $post['image'] = Storage::put('/public/images', $post['image']);
            request('image')->store('images', 'public');
        };

        $post['user_id'] = $request->user()->id;
        $post = Post::create($post);

        return redirect()->route('posts.show', ['post' => $post]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {

        $data = $request->validate([
            'title'=>'required|unique:posts',
            'text'=>'required',
            'image'=>'image|mimes:jpeg, png, jpg, gif, svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
                Storage::delete($post->image);
        }

        if (! $request['image'] == null) {
            $post['image'] = Storage::put('/public/images', $post['image']);
            request('image')->store('images', 'public');
        };

        $post['user_id'] = $request->user()->id;

        $post->update($data);
        return redirect()->route('posts.show', ['post' => $post]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }

    public function notFound()
    {
        return view('404');
    }
}
