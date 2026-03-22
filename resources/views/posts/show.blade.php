@extends('template')

@section('title', 'Post tab')

@section('content')

 <h1>Title: {{$post->title}}</h1>
 <h2>Content: {{$post->content}}</h2>
 <h4>Timestamp: {{$post->created_at}}</h4>

 @if(auth()->check() && auth()->user()->id == $post->user_id)
                     <form action="{{ route('posts.destroy', $post) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn bg-danger">Delete</button>
                    </form>
                    <form action="{{ route('posts.edit', $post) }}">
                        @csrf
                        <button class="btn bg-success">Update</button>
                    </form>
 @endif

@endsection
