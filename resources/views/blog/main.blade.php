@extends('layouts.app')

@section('content')
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{ asset('images/banner/pb.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Xəbərlər</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('main') }}">Ana Səhifə</a></li>
                            <li>Xəbərlər</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- Side bar start -->
                    <div class="col-lg-3">
                        <aside  class="side-bar sticky-top">
                            <div class="widget">
                                <h5 class="widget-title style-1">Axtarış</h5>
                                <div class="search-bx style-1">
                                    <form role="search" action="{{ route('blog.main') }}" method="get">
                                        <div class="input-group">
                                            <input name="search" class="form-control" placeholder="Axtar" type="text">
                                            <span class="input-group-btn">
												<button type="submit" class="fas fa-search text-primary"></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="widget recent-posts-entry">
                                <h5 class="widget-title style-1">Son xəbərlər</h5>
                                    <div class="widget-post-bx">
                                        @foreach($blogs->take(4) as $blog)
                                            <div class="widget-post clearfix">
                                                <div class="dlab-post-media">
                                                    <img src="{{ asset('storage/'.$blog->main_photo) }}" width="200" height="143" alt="">
                                                </div>
                                                <div class="dlab-post-info">
                                                    <div class="dlab-post-meta">
                                                        <ul>
                                                            <li class="post-date"> <strong>{{ \Carbon\Carbon::make($blog->created_at)->toDateString() }}</strong> </li>
                                                            <li class="post-author"> By <a href="javascript:void(0);">Argroup </a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="dlab-post-header">
                                                        <h6 class="post-title"><a href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                            </div>
                        </aside>
                    </div>
                    <!-- Side bar END -->
                    <!-- Left part start -->
                    <div class="col-lg-9">
                        @if($blogs->count())
                            @foreach($blogs as $blog)
                                <div class="blog-post blog-md clearfix">
                                    <div class="dlab-post-media dlab-img-effect zoom-slow">
                                        <a href="{{ route('blog.show', $blog->id) }}"><img src="{{ asset('storage/'.$blog->main_photo) }}" alt=""></a>
                                    </div>
                                    <div class="dlab-post-info">
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-date"> <strong>{{ \Carbon\Carbon::make($blog->created_at)->toDateString() }}</strong> </li>
                                                <li class="post-author"> By <a href="javascript:void(0);">ARGROUP</a> </li>
                                            </ul>
                                        </div>
                                        <div class="dlab-post-title">
                                            <h4 class="post-title"><a href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a></h4>
                                        </div>
                                        <div class="dlab-post-text">
                                            <p>{{ $blog->small_desc }}</p>
                                        </div>
                                        <div class="dlab-post-readmore">
                                            <a href="{{ route('blog.show', $blog->id) }}" title="READ MORE" rel="bookmark" class="site-button">Daha çox
                                                <i class="ti-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else

                            <div class="text-warning">Axtarışınıza uyğun xəbər tapılmadı...</div>

                        @endif
                        <!-- Pagination start -->
{{--                        <div class="pagination-bx clearfix text-center">--}}
{{--                            <ul class="pagination">--}}
{{--                                <li class="previous"><a href="javascript:void(0);"><i class="ti-arrow-left"></i> Prev</a></li>--}}
{{--                                <li class="active"><a href="javascript:void(0);">1</a></li>--}}
{{--                                <li><a href="javascript:void(0);">2</a></li>--}}
{{--                                <li><a href="javascript:void(0);">3</a></li>--}}
{{--                                <li class="next"><a href="javascript:void(0);">Next <i class="ti-arrow-right"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                        <!-- Pagination END -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
