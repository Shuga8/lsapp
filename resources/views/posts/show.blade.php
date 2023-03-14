@extends('layouts.app')

@section('content')
    <br>
    <a href="/posts" class="btn btn-secondary" my-2>Go Back</a>

    <h1>{{$post->title}}</h1>

    <div>
        {{$post->body}}
    </div>

    <hr>

    <small>Written on: {{$post->created_at}}</small>
@endsection