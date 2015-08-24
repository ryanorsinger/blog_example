@extends('layouts.master')

@section('content')

    <img src="/img/howdy." alt="">

    @if($name == '')
        <h1>You have a name, yo</h1>
    @else
        <h1>Hello, {{{ $name }}}!</h1>
    @endif

    @foreach($ads as $as)
        <h1>{{{ $ad->title }}}</h1>
        <p>{{{ $ad->description }}}</p>
    @endforeach


    {{{ !empty($name) ? $name : 'You must have a name, right?' }}}

@stop
