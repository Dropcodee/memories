@extends('layouts.blog')
@section('content')

<div class="container">
    @include('inc.messages')
    <h2>Edit News</h2>
    {!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST', 'enctype'=> 'multipart/form-data'])
    !!}
    <fieldset class="uk-fieldset">

        <div class="uk-margin">
            {{ Form::text('title', $post->title, [ "placeholder" => 'Enter Blog Post Title', "class" => "form-control", ]) }}
        </div>

        <div class="uk-margin">
            {{ Form:: textarea('body', $post->body, [ "class" =>"form-control", "rows" => "5", "placeholder" => "Enter Blog Post Body",
            "id" => "article-ckeditor" ]) }}
        </div>
        <div class="form-group">
            {{ Form::file('cover_image')}}
        </div>

        {{ Form::hidden('_method', 'PUT') }}
        <div class="form-group">
            {{ Form::submit('Edit News', [ "class" => "button button-border button-rounded button-amber" ]) }}
        </div>

    </fieldset>
    {!! Form::close() !!}
</div>
