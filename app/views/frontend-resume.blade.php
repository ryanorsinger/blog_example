@extends('layouts.master')

@section('title')
    Front End Resume
@stop

@section('content')

<h1>Front End Resume</h1>
<ul>
    <li>HTML</li>
    <li>CSS</li>
    <li>JS</li>
</ul>

<a href="{{{ action('PostsController@create') }}}" title="">Write a Blog Post</a>

@stop
