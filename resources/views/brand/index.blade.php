@extends('layouts.app')
@section('content')
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{ asset('images/banner/pb.jpg') }});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Brendlər</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{ route('main') }}">Ana səhifə</a></li>
                        <li>Brendlər</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>

    <!-- contact area -->
    <div class="section-full content-inner">
        <!-- Product -->
        <div class="container">
            <div class="row">
                @foreach($brands as $brand)
                    <div class="col-lg-3 col-md-4 col-sm-6" onclick="window.location=''">
                        <div class="item-box m-b10">
                            <div class="item-img" style="height: 300px; background: white;">
                                <img src="{{ asset('storage/'.$brand->logo) }}" alt=""/>
                                <div class="item-info-in">
                                    <ul>
                                        <li>
                                            <a href="{{ route('product.main').'/?brand='.$brand->id }}"><i class="ti-eye"></i>
                                                {{ $brand->products->count() }} məhsul
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-info text-center text-black p-a10">
                                <h6 class="item-title font-weight-500"><a href="{{ route('product.main').'/brand='.$brand->id }}"><b>{{ $brand->name }}</b></a></h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Product END -->
    </div>
@endsection
