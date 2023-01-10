<!-- Content -->
<div class="section-full page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle text-center bg-pt" style="background-image:url({{ asset('images/banner/pb.jpg') }});">
        <div class="container">
            <div class="dlab-bnr-inr-entry align-m text-center">
                <h1 class="text-white">{{ $project->name }}</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{ route('main') }}">Ana səhifə</a></li>
                        <li>{{ $project->name }}</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="content-block">
        <!-- About Services info -->
        <div class="section-full content-inner bg-white video-section" style="background-image:url({{ asset('images/background/bg-video.png') }});">
            <div class="container">
                <div class="section-content">
                    <div class="row d-flex">
                        <div class="col-lg-6 col-md-12 m-b30">
                            <div class="video-bx">
                                <img src="{{ asset('storage/'.$project->photo) }}" alt="Signature">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 m-b30 align-self-center video-infobx">
                            <div class="content-bx1">
                                <h2 class="m-b15 title">{{ $project->name }}<br>
                                    <span class="text-primary"> {{ $project->small_desc }}</span></h2>
                                <hr/>
                                <p class="m-b30">Status: <b>{{ $project->current_status }}</b></p>
                                <p class="m-b30">Müştəri: <b>{{ $project->customer }}</b></p>
                                <p class="m-b30">Başlama tarixi: <b>{{ \Illuminate\Support\Carbon::make($project->start_date)->toDateString() }}</b></p>
                                <p class="m-b30">Bitmə tarixi: <b>{{ \Illuminate\Support\Carbon::make($project->end_date)->toDateString() }}</b></p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Services info END -->

    </div>
    <!-- contact area END -->

    <div class="container woo-entry">
        <div class="dlab-tabs  product-description tabs-site-button">
            <ul class="nav nav-tabs" style="margin-top: 80px">
                <li><a data-bs-toggle="tab" href="#web-design-1" class="active"><i class="fas fa-globe"></i> Açıqlama</a></li>
            </ul>
            <div class="tab-content">
                <div id="web-design-1" class="tab-pane show active" style="">
                    {!! $project->desc !!}
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Content END -->
