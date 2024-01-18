@extends('layouts.layout')
@section('title')
    Show All Posts
@endsection
@section('content')

    <h1>Show All Posts</h1>

    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Body</th>
            <th>Actions</th> <!-- New header for buttons -->
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>

                <!-- New column for buttons -->
                <td>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-danger"
                           onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this post?'))
                       { document.getElementById('delete-form-{{ $post->id }}').submit(); }">
                            <i class="fas fa-trash"></i> Delete
                        </a>

                        <form id="delete-form-{{ $post->id }}" style="display: none;" method="POST" action="{{ route('posts.destroy', $post->id) }}">
                            @csrf
                            @method('DELETE')
                        </form>

                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-warning">
                            <i class="fas fa-eye"></i> Show
                        </a>

                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        <a href="{{ route('posts.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Create Post
        </a>
    </div>

@endsection
