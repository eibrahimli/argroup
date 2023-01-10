<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-p" style="background-image:url({{ asset('images/banner/pb.jpg') }});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">{{ $service->title }}</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>{{ $service->title }}</li>
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
                <!-- Left part start -->
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <!-- blog start -->
                    <div class="blog-post blog-single">
                        <div class="dlab-post-meta">
                            <ul>
                                <li class="post-date"> <strong>{{ \Illuminate\Support\Carbon::make($service->created_at)->toDateString() }}</strong> </li>

                            </ul>
                        </div>
                        <div class="dlab-post-title">
                            <h4 class="post-title m-t0"><a href="javascript:void()">{{ $service->title }}</a></h4>
                        </div>
                        <div class="dlab-post-media dlab-img-effect zoom-slow">
                            <a target="_blank" href="{{ asset('storage/'.$service->photo) }}"><img src="{{ asset('storage/'.$service->photo) }}" alt=""></a>
                        </div>
                        <div class="dlab-post-text">
                            {!! $service->desc !!}
                        </div>
                    </div>
                </div>
                <!-- Left part END -->
            </div>
        </div>
    </div>
</div>
