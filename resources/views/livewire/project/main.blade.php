
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle text-center bg-pt" style="background-image:url({{ asset('images/banner/pb.jpg') }});">
        <div class="container">
            <div class="dlab-bnr-inr-entry align-m text-center">
                <h1 class="text-white">@if($status == 1) Tamamlanmış @elseif($status == 0) Tamamlanmamış @else @endif Layihələr</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{ route('main') }}">Ana səhifə</a></li>
                        <li>@if($status == 1) Tamamlanmış @elseif($status == 0) Tamamlanmamış @else @endif Layihələr</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- Latests News -->
    <div class="container">
        <div class="section-head text-black text-center">
        </div>
        <div class="row">
            @foreach($projects as $project)
                <div class="col-4">
                    <div class="item">
                        <div class="blog-post blog-grid blog-rounded blog-effect1">
                            <div style="height: 220px;" class="dlab-post-media dlab-img-effect rotate">
                                <a href="{{ $project->path() }}">
                                    <img style="min-height: 220px;" src="{{ $project->photo() }}" alt="">
                                </a>
                            </div>
                            <div class="dlab-info p-a20 border-1">
                                <div class="dlab-post-meta">
                                    @if($project->status)
                                    <div class="completedx">TAMAMLANIB</div>
                                    @else
                                    <div class="continuingx">DAVAM EDİR</div>
                                    @endif
                                    <ul>
                                        <li class="post-date"> <strong>{{ $project->customer }}</strong> </li>

                                    </ul>
                                </div>
                                <div class="dlab-post-title">
                                    <h4 class="post-title"><a href="{{ $project->path() }}">{{ $project->name }}</a></h4>
                                </div>
                                <div class="dlab-post-text">
                                    <p>{{ $project->small_desc }}</p>
                                </div>
                                <div class="dlab-post-readmore">
                                    <a href="{{ $project->path() }}" title="READ MORE" rel="bookmark" class="site-button btnhover14">Ətraflı bax</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Latest News End -->
</div>
