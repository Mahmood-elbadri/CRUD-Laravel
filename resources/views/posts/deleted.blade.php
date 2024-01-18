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
                    <div class="btn-group" role="group" aria-label="Button group">
                        <a href="{{ route('posts.restore', $post->id) }}" class="btn btn-primary btn-block" type="button">Restore</a>
                        <form method="post" action="{{ route('posts.deleted', $post->id) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-primary btn-block">Delete Permanently</button>
                        </form>
                    </div>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
