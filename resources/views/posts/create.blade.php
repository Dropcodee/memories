@extends('layouts.blog')
@section('content')
    @include('layouts.nav')
<div class="container">
    <section class="section" id="content" style="background: #f2f3f2 !important;">
        <div class="container">
    @include('inc.messages') {!! Form::open(['action' => 'PostController@store', 'method' => 'POST', 'enctype'=> 'multipart/form-data'])
            !!}
            <h2>Create News</h2>
            <fieldset class="uk-fieldset">

                <div class="input-group input-group-alternative mb-4">
                    {{ Form::text('title', "", [ "placeholder" => 'Enter Blog Post Title', "class" => "form-control form-control-alternative",
                    ]) }}
                </div>

                <div class="input-group input-group-alternative mb-4">
                    {{ Form:: textarea('body', '', [ "class" =>"form-control form-control-alternative", "rows" => "5", "placeholder" => "Enter
                    Blog Post Body", "id" => "article-ckeditor" ]) }}
                </div>
                <div class="input-group input-group-alternative mb-4">
                    {{ Form::submit('Add News', [ "class" => "button button-border button-rounded button-amber" ]) }}
                </div>

            </fieldset>
            {!! Form::close() !!}
        </div>
    </section>
</div>
