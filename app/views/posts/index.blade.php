@extends('layouts.master')
@section('content')

    <h1>Blog Posts</h1>

    @foreach($posts as $post)

        <h3>Post Title: {{{ $post->title }}}</h3>

        <a href="{{{ action('PostsController@show', $post->id) }}}">Read Post</a>



    @endforeach


@stop
