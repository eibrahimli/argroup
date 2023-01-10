@extends('layouts.app')

@section('content')
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{ asset('images/banner/pb.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">{{ $blog->title }}</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('main') }}">Home</a></li>
                            <li>{{ $blog->title }}</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-area">
            <div class="container max-w900">
                <!-- blog start -->
                <div class="blog-post blog-single">
                    <div class="dlab-post-meta m-b20">
                        <ul>
                            <li class="post-date"> <strong>{{ $blog->created_data }}</strong></li>
                            <li class="post-author"> By <a href="javascript:void(0);">Argroup</a> </li>
                        </ul>
                    </div>
                    <div class="dlab-post-title">
                        <h4 class="post-title m-t0"><a href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a></h4>
                    </div>
                    <div class="dlab-post-media dlab-img-effect zoom-slow">
                        <a target="_blank" href="{{ asset('storage/'. $blog->photo) }}"><img src="{{ asset('storage/'. $blog->photo) }} }}" alt=""></a>
                    </div>
                    <div class="dlab-post-text">
                        {!! $blog->desc !!}
                    </div>
                </div>
                <!-- blog END -->
            </div>
        </div>
    </div>

@endsection
