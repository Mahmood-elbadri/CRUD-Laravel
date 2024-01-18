@extends('layouts.layout')
@section('title')
    Show Post
@endsection

<div class="container">
    <h1 class="post-title">Show Post</h1>

    <div class="post-container">

        <h2 class="post-title">{{ $post->title }}</h2>
        <p class="post-body">{{ $post->body }}</p>

        <div class="text-center" style="margin-top: 20px;">
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary edit-button">Edit Post</a>
        </div>

    </div>
</div>
