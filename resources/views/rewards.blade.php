@extends('layouts.app')

@section('content')
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{ asset('images/banner/pb.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Mükafatlar</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('main') }}">Ana Səhifə</a></li>
                            <li>Mükafatlar</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <div class="bg-white lightgallery" id="lightgallery">
            <div class="section-full bg-white content-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Images overlay & content on hover -->
                            <div class="section-content box-sort-in button-example">
                                <div class="row">
                                    @foreach($rewards as $reward)
                                        <div class="col-lg-4 col-md-4 col-sm-6 m-b30">
                                            <div class="dlab-box img-content-style-1 fly-box">
                                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect"> <img width="700" height="500" src="{{ asset('storage/'.$reward->photo) }}" alt="">
                                                    <div class="overlay-bx">
                                                        <div class="overlay-icon">
                                                            <ul class="list-inline link-list">
                                                                <li><span data-exthumbimage="{{ asset('storage/'.$reward->photo) }}" data-src="{{ asset('storage/'.$reward->photo) }}" class="check-km" title="Mükafatlar"><i class="ti-fullscreen"></i></span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Images content on hover Icon END -->
            </div>
        </div>
    </div>
@endsection
