@extends('layouts.app')

@section('content')
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{ asset('images/banner/pb.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">@if($category) {{ ucfirst($category->name) }} aid @elseif($brand) {{ ucfirst($brand->name) }} aid @else Bütün @endif Məhsullar</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('main') }}">Ana Səhifə</a></li>
                            <li>@if($category) {{ ucfirst($category->name) }} aid @elseif($brand) {{ ucfirst($brand->name) }} aid @else Bütün @endif Məhsullar</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner">
            <!-- Product -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 m-b30">
                        <aside class="side-bar shop-categories sticky-top">
                            <div class="widget recent-posts-entry">
                                <div class="dlab-accordion advanced-search toggle" id="accordion1">
                                    <div class="panel">
                                        <div class="acod-head">
                                            <h5 class="acod-title">
                                                <a data-bs-toggle="collapse" href="#categories">
                                                    Kateqoriyalar
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="categories" class="acod-body collapse show">
                                            <div class="acod-content">
                                                <div class="widget widget_services">
                                                    <ul>
                                                        <li><a href="{{ route('product.main') }}">Bütün Məhsullar</a></li>
                                                        @foreach($categories as $category)
                                                            <li><a href="{{ url('').'/product/?category='.$category->id }}">{{ $category->name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="acod-head">
                                            <h5 class="acod-title">
                                                <a data-bs-toggle="collapse" href="#brands">
                                                    Brendlər
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="brands" class="acod-body collapse show">
                                            <div class="acod-content">
                                                <div class="widget widget_services">
                                                    <ul>
                                                        @foreach($brands as $brand)
                                                            <li><a href="{{ url('').'/product/?brand='.$brand->id }}">{{ $brand->name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="acod-head">
                                            <h5 class="acod-title">
                                                <a data-bs-toggle="collapse"  href="#features" class="collapsed" >
                                                    Yeni məhsullar
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="features" class="acod-body collapse">
                                            <div class="acod-content">
                                                @foreach($products->take(4) as $rproduct)
                                                    <div class="item-widgets-box">
                                                        <div class="item-widgets-left">
                                                            <img src="{{ asset('storage/'.$rproduct->main_photo) }}" alt="">
                                                        </div>
                                                        <div class="item-widgets-body text-black">
                                                            <h6 class="item-title text-capitalize font-weight-500 m-t0">
                                                                <a href="{{ route('product.show',$rproduct->id) }}">{{ $rproduct->title }}</a>
                                                            </h6>
                                                            <h6 class="item-price m-b0">
                                                                <span class="text-primary">{{ $rproduct->price }}</span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-9 col-md-8 m-b30">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="item-box m-b10">
                                        <div class="item-img">
                                            <img src="{{ asset('storage/'.$product->main_photo) }}" alt=""/>
                                            <div class="item-info-in center">
                                                <ul>
                                                    <li><a href="{{ route('product.show',$product->id) }}"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="item-info text-center text-black p-a10">
                                            <h6 class="item-title font-weight-500"><a href="{{ route('product.show',$product->id) }}">{{ $product->title }}</a></h6>
                                            <h4 class="item-price">
                                                <span class="text-primary">{{ $product->price }}</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product END -->
        </div>
    </div>
@endsection
