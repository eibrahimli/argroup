<footer class="site-footer style2">

    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="widget widget_about">
                        <div class="footer-logo logo-dark">
                            <a href="#"><img src="{{ asset('images/logo.png') }}" alt=""/></a>
                        </div>
                        <p>{{ $about->small_desc }}</p>
                        <div class="widget widget_getintuch">
                            <ul>
                                <li><i class="ti-location-pin"></i> {{ $contact->address }} </li>
                                <li><i class="ti-mobile"></i> {{ $about->phone }}</li>
                                <li><i class="ti-email"></i> {{ $about->email }}</li>
                            </ul>
                        </div>
                        Developed by <a href="https://github.com/eibrahimli"><b>Elvir İbrahimli</b></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="widget">
                        <h4 class="footer-title">Sürətli keçidlər</h4>
                        <ul class="list-2">
                            <li><a href="{{ route('about') }}">Haqqımızda</a></li>
                            <li><a href="{{ route('blog.main') }}">Xəbərlər</a></li>
                            <li><a href="{{ route('service.main','all') }}">Xidmətlərimiz</a></li>
                            <li><a href="#">Gizlilik siyasətimiz</a></li>
                            <li><a href="{{ route('project.main') }}">Layihələr </a></li>
                            <li><a href="{{ route('rewards') }}">Mükafatlar </a></li>
                            <li><a href="#">Məhsullar</a></li>
                            <li><a href="{{ route('contact') }}">Bizimlə əlaqə</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="widget recent-posts-entry">
                        <h4 class="footer-title">Son xəbərlər</h4>
                        <div class="widget-post-bx">
                            @foreach($blogs as $blog)
                                <div class="widget-post clearfix">
                                    <div class="dlab-post-media">
                                        <img src="{{ asset('storage/'. $blog->main_photo) }}" width="200" height="143" alt="">
                                    </div>
                                    <div class="dlab-post-info">
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-date"> <strong>{{ \Carbon\Carbon::make($blog->created_at)->toDateString() }}</strong> </li>
                                                <li class="post-author"> By <a href="javascript:void(0);">ArGroup </a> </li>
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
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top End -->
</footer>
