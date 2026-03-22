@extends('template')
@section('title', 'New Post')
@section('content')
 <h1>New post</h1>

 <form action="{{ route('posts.store') }}" method="POST">
  @csrf
  <div class="form-group">
   <label for="title">Title:</label>
   <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
   @if ($errors->has('title'))
   <div class="text-danger">
    {{ $errors->first('title') }}
   </div>
   @endif
  </div>
  <div class="form-group">
   <label for="content">Content:</label>
   <textarea class="form-control" name="content" id="content" rows="5">{{ old('content') }}</textarea>
   @if ($errors->has('content'))
   <div class="text-danger">
    {{ $errors->first('content') }}
   </div>
   @endif
  </div>
  <input type="submit" name="send" value="Send"
   class="btn btn-dark btn-block">
 </form>
@endsection
