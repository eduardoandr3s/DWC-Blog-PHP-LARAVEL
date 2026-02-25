@extends('template')
@section('title', 'New Language')
@section('content')
 <h1>New Language</h1>

 <form action="{{ route('englishes.store') }}" method="POST">
  @csrf
  <div class="form-group">
   <label for="name">Name:</label>
   <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
   @if ($errors->has('name'))
   <div class="text-danger">
    {{ $errors->first('name') }}
   </div>
   @endif
  </div>
  <input type="submit" name="send" value="Send"
   class="btn btn-dark btn-block">
 </form>
@endsection
