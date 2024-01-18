@extends('layouts.layout')
@section('title')
    Create Post
@endsection

<div style="max-width: 600px; margin: auto;">
    <h1 style="text-align: center; color: #333;">Create Post</h1>

    <form action="{{ route('posts.store') }}" method="post" style="background-color: #f5f5f5; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        @csrf

        <div class="form-group">
            <label for="title" style="font-weight: bold; color: #555;">Title:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter the title" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div class="form-group">
            <label for="body" style="font-weight: bold; color: #555;">Body:</label>
            <textarea class="form-control" id="body" name="body" placeholder="Enter the post content" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;"></textarea>
        </div>

        <div class="form-group" style="text-align: center;">
            <button type="submit" class="btn btn-success" style="padding: 10px 20px; font-size: 16px; border: none; border-radius: 5px; cursor: pointer;">Create Post</button>
        </div>
    </form>
</div>
