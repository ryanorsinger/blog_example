<?php

class Post extends Eloquent
{
    protected $table = 'posts';

    public static $rules = array(
        'title'      => 'required|max:100',
        'body'       => 'required|max:10000'
    );

    protected $guarded = array('id', 'title', 'body');

}
