@extends('layouts.blog')
@section('content')
    @include('layouts.nav')
<section id="content" class="bg__dark">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="clearfix mt-5">
                <!-- latest News
    ============================================= -->
                <div class="fancy-title title-border">
                    <h3>Recent News</h3>
                </div>
                @if (count($posts) > 0) @foreach ($posts as $post)
                <div class="ipost clearfix bottommargin-sm">
                    <div class="col_half nobottommargin">
                        <div class="entry-image">
                            <a href="#"><img class="image_fade" src="{{ asset('img/img15.jpg') }}" alt="Image" style="opacity: 0.999001;"></a>
                        </div>
                    </div>
                    <div class="col_half nobottommargin col_last">
                        <div class="entry-title">
                            <h3><a href="blog-single.html">{{ $post->title }}</a></h3>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> 7th Jun 2014</li>
                            <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 23</a></li>
                            <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                        </ul>
                        <div class="entry-content">
                            <p>{!! $post->body !!}</p>
                            @if(!Auth::guest()) @if (Auth::user()->id === $post->user_id)
                            <a href="/posts/{{ $post->id }}/edit" class="button button-border button-rounded button-amber">Edit News</a>                            {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST']) !!} {{
                            Form::hidden('_method', 'DELETE ') }}
                            <div class="uk-margin">
                                {{ Form::submit('Delete', ['class' => 'button button-border button-rounded button-amber']) }}
                            </div>
                            {!! Form::close() !!} @endif @endif
                        </div>
                    </div>
                </div>
                @endforeach @else
                <h1>NO NEWS FOR NOW </h1>

                @endif
            </div>
        </div>
    </div>
</section>
@endsection
