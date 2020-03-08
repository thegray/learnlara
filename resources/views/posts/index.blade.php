@extends('layouts/app')

@section('content')
<div class="jumbotron">
    <h1>Posts</h1>
</div>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
        <div class="card p-3 mt-3 mb-3">
        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
        </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Post</p>
    @endif
@endsection