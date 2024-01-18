<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //$posts  = Post::all();
        $posts = Post::get();
        return view('posts.index',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'body'=>$request->body
        ]);
        /**
         * This is another way
         */
        /*$post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();*/

        return redirect('/posts');
        /**
         * This is another way
         */
        //
        /*$post = Post::firstOrCreate([
            'title' => $request->title,
            'body' => $request->body
        ]);*/
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $post = Post::findOrFail($post->id);
        return view('posts.show',['post'=>$post]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $post = Post::findOrFail($post->id);
        return view('posts.edit',['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post = Post::find($post->id);

        $post->body = $request->body;
        $post->title = $request->title;
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }


    public function about()
    {
        return view('posts.about');
    }

    public function deleted()
    {
        $posts = Post::onlyTrashed()->get();
        return view('posts.deleted',['posts'=>$posts]);
    }

    public function restore($id)
    {
        Post::withTrashed()
            ->where('id', $id)
            ->restore();
        return redirect()->route('posts.index');
    }

    public function forceDelete($postId)
    {

        Post::withTrashed()
            ->where('id', $postId)
            ->forceDelete();
        return redirect()->route('posts.deleted');
    }

}
