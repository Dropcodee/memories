@extends('layouts.blog')
@section('content')
    @include('layouts.nav')
<div class="container">
    <section class="section" id="content" style="background: #f2f3f2 !important;">
        <div class="container">
    @include('inc.messages') {!! Form::open(['action' => 'TributeController@store', 'method' => 'POST', 'enctype'=> 'multipart/form-data'])
            !!}
            <h2>Create Tribute</h2>
            <fieldset class="uk-fieldset">
                <div class="input-group input-group-alternative mb-4">
                    {{ Form::text('name', "", [ "placeholder" => 'Enter Your Name', "class" => "form-control form-control-alternative", ]) }}
                </div>

                <div class="input-group input-group-alternative mb-4">
                    {{ Form::text('title', "", [ "placeholder" => 'Enter Tribute Title', "class" => "form-control form-control-alternative",
                    ]) }}
                </div>

                <div class="input-group input-group-alternative mb-4">
                    {{ Form:: textarea('body', '', [ "class" =>"form-control form-control-alternative", "rows" => "6", "placeholder" => "Share
                    Your Thoughts", "id" => "article-ckeditor" ]) }}
                </div>
                <div class="input-group input-group-alternative mb-4">
                    {{ Form::submit('Add Tribute', [ "class" => "button button-border button-rounded button-amber" ]) }}
                </div>

            </fieldset>
            {!! Form::close() !!}
        </div>
    </section>
</div>
