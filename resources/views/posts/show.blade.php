@extends('layouts/app')

@section('content')
<div class="jumbotron">
    <h1>{{$post->title}}</h1>
</div>
    <a href="/posts" class="btn btn-default">Back</a>
    <div class="card p-3 mt-3 mb-3">
        <h3>{!!$post->body!!}</h3>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    </div>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">edit</a>
        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => "pull-right"]) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close()!!}
        @endif
    @endif
@endsection