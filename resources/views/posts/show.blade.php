@extends('layouts/app')

@section('content')
<div class="jumbotron">
    <h1>{{$post->title}}</h1>
</div>
    <a href="/posts" class="btn btn-default">Back</a>
    <div class="card p-3 mt-3 mb-3">
        <h3>{{$post->body}}</h3>
    <small>Written {{$post->created_at}}</small>
    </div>
@endsection