
@extends('layouts.layout')
@section('title')
    Edit Post
@endsection

<h1>Edit Post</h1>

<form action="{{ route('posts.update', $post->id) }}" method="post">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
    </div>

    <div class="form-group">
        <label for="body">Body:</label>
        <textarea class="form-control" id="body" name="body">{{ $post->body }}</textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </div>
</form>
