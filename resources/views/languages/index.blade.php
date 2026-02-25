@extends('template')

@section('title', 'List of Languages')

@section('content')

  <h1>List of Languages</h1>
        <ul>
            @forelse ($languages as $language)
            <li>{{$language->name}}</li>
            @empty
            <li>No languages found</li>
            @endforelse
        </ul>

@endsection
