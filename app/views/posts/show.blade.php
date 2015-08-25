@extends('layouts.master')
@section('content')


<div class="col-md-8">
    <h1>{{{ $post->title }}}</h1>
    <p>{{{ $post->body }}}</p>
</div>

<div class="col-md-4">
    <a href="{{{ action('PostsController@edit', $post->id) }}}" class="btn btn-default">Edit Post &nbsp;<span class="glyphicon glyphicon-pencil"></span></a>

    <a id="deletePostButton" class="btn btn-default">Edit Post &nbsp;<span class="glyphicon glyphicon-pencil"></span></a>


    {{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id' => 'deletePostForm')) }}
    {{ Form::close() }}
</div>

<script>
    $('#deletePostButton').on('click', function() {
        var onConfirm = confirm('Are you sure that you want to delete this form post?');

        if(onConfirm === true) {
            $('#deletePostForm').submit();
        }
    });

</script>
@stop
