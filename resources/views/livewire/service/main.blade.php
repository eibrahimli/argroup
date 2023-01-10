<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt"
         style="background-image:url({{ asset('images/banner/pb.jpg') }});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Xidmətlər</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{ route('main') }}">Ana səhifə</a></li>
                        <li>Xidmətlər</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="content-block">
        <!-- About Us -->
        <div class="section-full content-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-5">
                        <div class="widget sidebar-widget ext-sidebar-menu widget_nav_menu">
                            <ul class="menu">
                                <li wire:click="$emit('service-changed', 'all')" @if($filter === 'all') class="active" @endif><a href="javascript:void(0);">Bütün</a></li>
                                @foreach($categories as $category)
                                    <li wire:click.prevent="changeFilter({{ $category->id }})" @if($filter == $category->id) class="active" @endif>
                                        <a href="javascript:void(0);">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        @if($filter != 'all')
                            <div class="widget">
                                <div class="download-file">
                                    <h4 class="title">Kataloq</h4>
                                    <ul>
                                        <li>
                                            <a href="{{ asset('storage/'.$current_category->catalog) }}" target="_blank">
                                                <div class="text">Kataloqu yukle</div>
                                                <i class="fas fa-download"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-7 m-b30">
                        @foreach($services as $service)
                            <div class="blog-post blog-md clearfix">
                                <div class="dlab-post-media dlab-img-effect zoom-slow">
                                    <a href="{{ route('service.show', $service->id) }}">
                                        <img src="{{ asset('storage/'.$service->main_photo) }}" alt="">
                                    </a>
                                </div>
                                <div class="dlab-post-info">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-date"><span> {{ \Illuminate\Support\Carbon::make($service->created_at)->toDateString() }}</span></li>
                                        </ul>
                                    </div>
                                    <div class="dlab-post-title">
                                        <h4 class="post-title"><a href="{{ route('service.show', $service->id) }}">{{ $service->title }}</a>
                                        </h4>
                                    </div>
                                    <div class="dlab-post-text">
                                        <p>{{ $service->small_desc }}.</p>
                                    </div>
                                    <div class="dlab-post-readmore">
                                        <a href="{{ route('service.show', $service->id) }}" title="READ MORE" rel="bookmark" class="site-button">READ
                                            MORE
                                            <i class="ti-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- Pagination start -->
{{--                        <div class="pagination-bx clearfix text-center">--}}
{{--                            <ul class="pagination">--}}
{{--                                <li class="previous"><a href="javascript:void(0);"><i class="ti-arrow-left"></i>--}}
{{--                                        Prev</a></li>--}}
{{--                                <li class="active"><a href="javascript:void(0);">1</a></li>--}}
{{--                                <li><a href="javascript:void(0);">2</a></li>--}}
{{--                                <li><a href="javascript:void(0);">3</a></li>--}}
{{--                                <li class="next"><a href="javascript:void(0);">Next <i class="ti-arrow-right"></i></a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                        <!-- Pagination END -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Services -->
    </div>
    <!-- contact area END -->
</div>
<!-- Content END-->
