@extends('layouts.blog')
@section('content')
    @include('layouts.nav')
<section id="content" class="bg__dark" style="">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="clearfix mt-5">
                <!-- latest News
    ============================================= -->
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <h4 class="mb-0 pr-2 ls1 uppercase t700">All Tributes</h4>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler1" aria-controls="navbarToggler1"
                        aria-expanded="false" aria-label="Toggle navigation">
            <i class="icon-line-menu"></i>
        </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarToggler1">
                        <div></div>
                        <ul class="nav nav-md navbar-nav mr-md-auto mr-lg-0 mt-2 mt-lg-0 align-self-end" role="tablist">
                            <li class="nav-item">
                                <a class=" button button-border button-rounded button-amber" id="nav-outdoor-tab" href="/tributes/create" role="tab" aria-selected="true">Add A Tribute</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="line line-xs line-light"></div>
                @if (count($tributes) > 0) @foreach ($tributes as $tribute)
                <div class="ipost mb-4 mb-lg-4 row clearfix">
                    <div class="col-md-5">
                        <div class="entry-image">
                            <a href="#"><img class="image_fade" src="{{ asset('img/img15.jpg') }}" alt="Image" style="opacity: 0.999001;"></a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="entry-title white">
                            <h3><a href="/tributes" style="color: #fff !important">{{ $tribute->title }}</a></h3>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> 7th Jun 2014</li>
                            <li><a href="/tributes"><i class="icon-user"></i> {{ $tribute->name }}</a></li>

                        </ul>
                        <div class="entry-content">
                            <p>{!! $tribute->body !!}</p>
                            {!! Form::open(['action' => ['TributeController@destroy', $tribute->id], 'method' => 'POST']) !!} {{ Form::hidden('_method',
                            'DELETE ') }}
                            <div class="uk-margin">
                                {{ Form::submit('Delete', ['class' => 'button button-border button-rounded button-amber']) }}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                @endforeach @else
                <h1>NO TRIBUTES FOR NOW </h1>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
