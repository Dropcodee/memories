@extends('layouts.blog')
@section('content')
    @include('layouts.nav')
<section id="content" class="bg__dark" style="height: 100vh;">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="clearfix mt-5">
                <div class="col-lg-12 bottommargin">
    @include('inc.messages')
                    <label>Upload Your Image of Prof Pius Adesanmi:</label><br>
                    <div class="file-input file-input-new">
                        <div class="kv-upload-progress kv-hidden" style="display: none;">
                            <div class="progress">
                                <div class="progress-bar bg-success progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0"
                                    aria-valuemin="0" aria-valuemax="100" style="width:0%;">
                                    0%
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        {!! Form::open(['action' => 'UploadController@store', 'method' => 'POST', 'enctype'=> 'multipart/form-data']) !!}
                        <fieldset class="uk-fieldset">
                            <div class="form-group">
                                {{ Form::file('memories_image')}}
                            </div>
                            <div class="uk-margin">
                                {{ Form::submit('Upload', [ "class" => "button button-border button-rounded button-amber" ]) }}
                            </div>
                        </fieldset>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
