@extends('template')

@section('title', 'List of posts')

@section('content')



  <h1>List of posts</h1>
        <ul>
            @isset($posts)
            @forelse ($posts as $post)
            <li>
                  {{$post->title}} ({{$post->user->login}})
                  <form action="{{ route('posts.show', $post) }}" method="GET">
                        <button type="submit" class="btn bg-success">View</button>
                    </form>

                           </li>
            @empty
            <li>No posts found</li>
            @endforelse
            @else
            <li>No posts to display</li>
            @endisset
        </ul>
       {{$posts->links() }}


@endsection
