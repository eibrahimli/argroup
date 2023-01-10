<!-- header -->
<header class="site-header mo-left header ext-header navstyle1">
    <div class="top-bar">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-center" style="padding: @if(!session()->get('link') && !isset(session('link')->file)) 5px !important; @endif">
                <div class="dlab-topbar-left">
                    <ul>
                        <li>
                            <ul>
                                <li><a href="{{ route('lang', 'az') }}">Az</a></li>
                                <li><a href="{{ route('lang', 'en') }}">En</a></li>
                                <li><a href="{{ route('lang', 'ru') }}">Ru</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('about') }}">Haqqımızda</a></li>
                        <li><a href="{{ route('contact') }}">Əlaqə</a></li>
                    </ul>
                </div>
                <div class="dlab-topbar-right">
                    @if(session()->get('link') && isset(session('link')->file))
                        <div class="d-none d-lg-block">
                            <a href="{{ session()->get('link') ? session()->get('link')->file ?? false : false }}" class="site-button radius-no btnhover11">TƏKLİF AL</a>
                        </div>
                    @endif
                    <div class="d-md-none d-sm-block clang">
{{--                        <button class="btn btn-secondary"><img style="width: 50px" src="{{ asset('img/az.png') }}"></button>--}}
{{--                        <button class="btn btn-secondary"><img style="width: 50px" src="{{ asset('img/az.png') }}"></button>--}}
{{--                        <button class="btn btn-secondary"><img style="width: 50px" src="{{ asset('img/az.png') }}"></button>--}}
                    </div>
                    <div class="d-md-none d-sm-block" style="font-size: 33px; letter-spacing: 11px;">
                        <i onclick="window.location='{{ $contact->in }}'" class="fa-brands fa-instagram"></i>
                        <i onclick="window.location='{{ $contact->ln }}'" class="fa-brands fa-linkedin"></i>
                        <i onclick="window.location='{{ $contact->fb }}'" class="fa-brands fa-facebook"></i>
                        <i onclick="window.location='{{ $contact->wp }}'" class="fa-brands fa-whatsapp"></i>
                        <i onclick="window.location='{{ $contact->yt }}'" class="fa-brands fa-youtube"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="middle-bar bg-white">
        <div class="container">
            <!-- website logo  -->
            <div class="middle-area">
                <div class="logo-header logo-dark">
                    <a href="{{ route('main') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                </div>
                <div class="service-list">
                    <ul>
                        <li>
                            <i class="la la-phone"></i>
                            <h4 class="title">(012) 409 74 24</h4>
                            <span><a href='#'>Digər nömrələr</a></span>
                        </li>
                        <li>
                            <i class="la la-clock-o"></i>
                            <h4 class="title">08:00 - 18:00</h4>
                            <span>Bazar ertəsi - Şənbə</span>
                        </li>
                        <li>
                            <i class="la la-map"></i>
                            <h4 class="title">Xətai 55</h4>
                            <span>djsashj</span>
                        </li>
                        <li style="letter-spacing: 3px;">
                            <i onclick="window.location='{{ $contact->in }}'" class="fa-brands fa-instagram" style="font-size: 33px; position: unset; color: #f83617;"></i>
                            <i onclick="window.location='{{ $contact->ln }}'" style="color: #0d63bc; font-size: 33px; position: unset;" class="fa-brands fa-linkedin"></i>
                            <i onclick="window.location='{{ $contact->yt }}'" style="font-size: 33px; position: unset; color: #5bd06f;" class="fa-brands fa-youtube"></i>
                            <br/>
                            <i onclick="window.location='{{ $contact->fb }}'" style="font-size: 33px; position: unset; color: #1a77f2;" class="fa-brands fa-facebook"></i>
                            <i onclick="window.location='{{ $contact->wp }}'" style="font-size: 33px; position: unset; color: #5bd06f;" class="fa-brands fa-whatsapp"></i>

                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix ">
            <div class="container clearfix">
                <!-- website logo -->
                <div class="logo-header mostion logo-dark">
                    <a href="{{ route('main') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                </div>
                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- extra nav
                <div class="extra-nav">
                    <div class="extra-cell">
                        <button id="quik-search-btn" type="button" class="site-button-link"><i class="la la-search"></i></button>
                    </div>
                </div> -->
                <!-- Quik search -->
                <div class="dlab-quik-search ">
                    <form action="#">
                        <input name="search" value="" type="text" class="form-control" placeholder="Axtarmağa başla">
                        <span id="quik-search-remove"><i class="ti-close"></i></span>
                    </form>
                </div>
                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                    <div class="logo-header d-md-block d-lg-none">
                        <a href="{{ route('main') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="{{ route('main') === url()->current() ? 'active' : null }} has-mega-menu"> <a href="{{ route('main') }}">Ana səhifə</a>
                        </li>
                        <li>
                            <a href="javascript:;">Xidmətlər<i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu tab-content">
                                @foreach($service_categories as $category)
                                    <li>
                                        <a href="{{ route('service.main', $category->id) }}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="has-mega-menu"> <a href="javascript:;">Layihələr<i class="fas fa-chevron-down"></i></a>
                            <ul class="mega-menu">
                                <li>
                                    <a href="{{ route('project.main', 1) }}">Tamalanmış layihələr</a>
                                    <ul>

                                        @foreach($projects->where('status', 1) as $project)
                                            <li><a href="{{ $project->path() }}">{{ $project->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('project.main', 0) }}">Davam edən layihələr</a>
                                    <ul>

                                        @foreach($projects->where('status', 0) as $project)
                                            <li><a href="{{ $project->path() }}">{{ $project->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('brand.main') }}">Brendlər</a>

                        </li>
                        <li class="has-mega-menu"> <a href="javascript:;">Məhsullar<i class="fas fa-chevron-down"></i></a>
                            <ul class="mega-menu">
                                @foreach($categories as $category)
                                    <li> <a href="{{ route('product.main').'/?category='.$category->id }}">{{ $category->name }}</a>
                                        <ul>

                                            @foreach($category->products as $product)
                                                <li><a href="{{ route('product.show', $product->id) }}">{{ $product->title }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="has-mega-menu"> <a href="{{ route('rewards') }}">Mükafatlar</a>
                        </li>
                        <li>
                            <a href="{{ route('blog.main') }}">Xəbərlər</a>
                        </li>
                    </ul>
                    <div class="dlab-social-icon">
                        <ul>
                            <li><a class="site-button facebook sharp-sm outline fab fa-facebook-f" href="{{ $contact->fb }}"></a></li>
                            <li><a class="site-button twitter sharp-sm outline fab fa-whatsapp" href="{{ $contact->wp }}"></a></li>
                            <li><a class="site-button linkedin sharp-sm outline fab fa-linkedin-in" href="{{ $contact->ln }}"></a></li>
                            <li><a class="site-button instagram sharp-sm outline fab fa-instagram" href="{{ $contact->in }}"></a></li>
                            <li><a class="site-button instagram sharp-sm outline fab fa-youtube" href="{{ $contact->yt }}"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>
<!-- header END -->

{{--<script type="text/javascript">--}}
{{--    function custom_template(obj){--}}
{{--        var data = $(obj.element).data();--}}
{{--        var text = $(obj.element).text();--}}
{{--        if(data && data['img_src']){--}}
{{--            img_src = data['img_src'];--}}
{{--            template = $("<div><img src=\"" + img_src + "\" style=\"width:100%;height:150px;\"/><p style=\"font-weight: 700;font-size:14pt;text-align:center;\">" + text + "</p></div>");--}}
{{--            return template;--}}
{{--        }--}}
{{--    }--}}
{{--    var options = {--}}
{{--        'templateSelection': custom_template,--}}
{{--        'templateResult': custom_template,--}}
{{--    }--}}
{{--    $('#id_select2_example').select2(options);--}}
{{--    $('.select2-container--default .select2-selection--single').css({'height': '220px'});--}}

{{--</script>--}}
