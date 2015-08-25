@extends('layouts.master')
@section('content')

    <h1>Blog Posts</h1>

    @foreach($posts as $post)

        <h3>Post Title: {{{ $post->title }}}</h3>

        <a href="{{{ action('PostsController@show', $post->id) }}}" class="btn btn-primary">Read Post</a>
        <a href="{{{ action('PostsController@edit', $post->id) }}}" class="btn btn-default">
            <span class="glyphicon glyphicon-pencil"></span>&nbsp;Edit Post</a>

    @endforeach


@stop
