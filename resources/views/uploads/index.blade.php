@extends('layouts.gallery')
@section('content')
    @include('layouts.nav')
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix" style="text-align: center;">

            <h3 id="headMan">Shared Memories Of Professor Pius Adesanmi</h3>
            <h5 id="headMan">Share your memory of Prof Pius Adesanmi</h5>
            <a href="/uploads/create" class="button button-border button-rounded button-amber"><i class="icon-ok"></i>Upload Your Pictures With Him</a>            @if (count($uploads) > 0)
            <div class="masonry-thumbs col-12 clearfix" data-big="3" data-lightbox="gallery">
                @foreach ($uploads as $upload)
                <a href="/storage/memories_image/{{ $upload->memories_image }}" data-lightbox="gallery-item">
							<img src="/storage/memories_image/{{ $upload->memories_image }}" alt="Gallery Image">
							<div class="overlay"><div class="overlay-wrap"><i class="icon-line-plus"></i></div></div>
                        </a> @endforeach
            </div>
            @else
            <h1>No Images Yet</h1>
            @endif
        </div>

    </div>

</section>
<!-- #content end -->
