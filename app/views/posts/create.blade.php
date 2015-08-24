@extends('layouts.master')

@section('content')


    <form action="{{{ action('PostsController@store') }}}" method="POST" accept-charset="utf-8">
        <input type="text" value="{{{ Input::old('title') }}}" name="title" placeholder="blog title">
        <textarea name="body" placeholder="blog body">{{{ Input::old('body') }}}</textarea>

        <button type="submit">Save Post</button>
    </form>



@stop
