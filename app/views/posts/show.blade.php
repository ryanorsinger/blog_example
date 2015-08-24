@extends('layouts.master')
@section('content')


<div class="col-md-8">
    <h1>{{{ $post->title }}}</h1>
    <p>{{{ $post->body }}}</p>
</div>

<div class="col-md-4">
    <a href="{{{ action('PostsController@edit', $post->id) }}}" class="btn btn-default">Edit Post &nbsp;<span class="glyphicon glyphicon-pencil"></span></a>

</div>

@stop
