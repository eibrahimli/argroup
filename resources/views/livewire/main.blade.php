<div class="page-content bg-white">
    <!-- Slider -->
    <div class="main-slider style-two default-banner" id="home">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="reveal-add-on36"
                     data-source="gallery" style="background:#ffffff;padding:0px;">
                    <!-- START REVOLUTION SLIDER 5.4.7.2 fullscreen mode -->
                    <div id="welcome" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.7.2">
                        <ul>
                            @foreach($sliders as $key => $slider)
                                <!-- SLIDE  -->
                                <li data-index="rs-{{ ($key+1) * 100 }}" data-transition="slideoververtical"
                                    data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                                    data-easein="default" data-easeout="default" data-masterspeed="default"
                                    data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Slide"
                                    data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                                    data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                                    data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset('storage/'.$slider->photo) }}" alt=""
                                         data-lazyload="{{ asset('storage/'.$slider->photo) }}"
                                         data-bgposition="center center" data-kenburns="on" data-duration="4000"
                                         data-ease="Power3.easeInOut" data-scalestart="150" data-scaleend="100"
                                         data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0"
                                         data-offsetstart="-100 0" data-offsetend="-100 0" data-bgparallax="4"
                                         class="rev-slidebg" data-no-retina>
                                    <!-- LAYER NR. 1 -->

                                    <div class="tp-caption tp-shape tp-shapewrapper ov-tp "
                                         id="slide-100-layer-1"
                                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                         data-width="full"
                                         data-height="full"
                                         data-whitespace="nowrap"
                                         data-type="shape"
                                         data-basealign="slide"
                                         data-responsive_offset="off"
                                         data-responsive="off"
                                         data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1500,"frame":"999","to":"opacity:0;","ease":"Power4.easeIn"}]'
                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 5;">
                                    </div>
                                    <div class="tp-caption "
                                         id="slide-100-layer-2"
                                         data-x="['center','center','center','center']"
                                         data-hoffset="['-90','-300','0','0']"
                                         data-y="['middle','middle','middle','middle']"
                                         data-voffset="['-30','-55','-50','-70']"
                                         data-fontsize="['65','50','40','30']"
                                         data-lineheight="['75','60','50','40']"
                                         data-letterspacing="['3','2','2','2']"
                                         data-width="['1000','none','768','360']"
                                         data-height="none"
                                         data-whitespace="['normal','nowrap','normal','normal']"
                                         data-type="text"
                                         data-responsive_offset="off"
                                         data-responsive="off"
                                         data-frames='[{"delay":900,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:1.1;sY:1.1;skX:0;skY:0;opacity:0;","color":"#000000","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","color":"#000000","to":"opacity:0;","ease":"nothing"}]'
                                         data-textAlign="['left','left','center','center']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[10,10,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 6; min-width: 800px; max-width: 800px; font-weight: 900; white-space: normal; color: #00030f; font-family:  'Roboto Condensed', sans-serif;">
                                        {{ $slider->title }}
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption"
                                         id="slide-100-layer-3"
                                         data-x="['center','center','center','center']"
                                         data-hoffset="['-265','-170','0','0']"
                                         data-y="['middle','middle','middle','middle']"
                                         data-voffset="['100','55','50','30']"
                                         data-fontsize="['16','16','15','14']"
                                         data-lineheight="['30','30','25','22']"
                                         data-width="['630','550','500','300']"
                                         data-height="none"
                                         data-whitespace="normal"
                                         data-type="text"
                                         data-responsive_offset="off"
                                         data-responsive="off"
                                         data-frames='[{"delay":900,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:1.1;sY:1.1;skX:0;skY:0;opacity:0;","color":"#000000","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","color":"#000000","to":"opacity:0;","ease":"nothing"}]'
                                         data-textAlign="['left','left','center','center']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 7; min-width: 640px; max-width: 640px; font-weight: 700; font-size: 18px; line-height: 30px; font-weight: 400; color: #00030f; font-family: 'Poppins',sans-serif;">
                                        {{ $slider->desc }}
                                    </div>
                                    <!-- LAYER NR. 5 -->
                                    @if($slider->link)
                                        <a class="tp-caption rev-btn tc-btnshadow tp-rs-menulink bg-primary"
                                           href="{{ $slider->link }}" target="_blank"
                                           id="slide-100-layer-4"
                                           data-x="['center','center','center','center']"
                                           data-hoffset="['-515','-375','-90','-75']"
                                           data-y="['middle','middle','middle','middle']"
                                           data-voffset="['190','140','130','120']"
                                           data-lineheight="['18','18','18','18']"
                                           data-whitespace="nowrap"
                                           data-type="button"
                                           data-actions=''
                                           data-responsive_offset="off"
                                           data-responsive="off"
                                           data-frames='[{"delay":900,"speed":2000,"frame":"0","from":"x:-50px;z:0;rX:0;rY:0;rZ:0;sX:1.1;sY:1.1;skX:0;skY:0;opacity:0;fbr:100;","bgcolor":"#000000","to":"o:1;fbr:100;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","bgcolor":"#000000","to":"opacity:0;fbr:100;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"150","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;fbr:90%;","style":"c:rgba(255,255,255,1);"}]'
                                           data-textAlign="['center','center','center','center']"
                                           data-paddingtop="[15,15,15,10]"
                                           data-paddingright="[30,30,30,20]"
                                           data-paddingbottom="[15,15,15,10]"
                                           data-paddingleft="[30,30,30,20]"
                                           style="z-index: 8;letter-spacing: 2px; white-space: nowrap; font-size: 12px; font-weight: 600; color: rgba(255,255,255,1);  text-transform: uppercase;">
                                            Ətraflı bax
                                        </a>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                    </div>
                </div>
                <!-- END REVOLUTION SLIDER -->
            </div>
        </div>
    </div>
    <!-- Slider END -->
    <!-- contact area -->
    <div class="content-block">
        <div class="container mt-5">
            <div class="section-content box-sort-in button-example p-b0">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sms-6">
                        <div class="icon-bx-wraper bx-style-2 m-t40 m-b30 p-a30 center">
                            <div class="icon-bx-sm  bg-primary radius border-1 m-b20"><a class="icon-cell"><i
                                        class="fa-solid fa-clipboard-check"></i></a></div>
                            <div class="icon-content p-t40">
                                <h5 class="dlab-tilte text-uppercase">KEYFİYYƏT</h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="icon-bx-wraper bg-white bx-style-2 m-t40 m-b30 p-a30 center">
                            <div class="icon-bx-sm text-primary bg-white radius border-1 m-b20"><a
                                    class="icon-cell text-primary"><i class="fa-solid fa-people-roof"></i></a></div>
                            <div class="icon-content p-t40">
                                <h5 class="dlab-tilte text-uppercase">PEŞƏKARLQ</h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="icon-bx-wraper bx-style-2 m-t40 m-b30 p-a30 center">
                            <div class="icon-bx-sm  bg-primary radius border-1 m-b20"><a class="icon-cell text-white"><i
                                        class="fa-solid fa-people-group"></i></a></div>
                            <div class="icon-content p-t40">
                                <h5 class="dlab-tilte text-uppercase">KADR SİYASƏTİ</h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="icon-bx-wraper bx-style-2 m-t40 m-b30 p-a30 center">
                            <div class="icon-bx-sm text-primary bg-white radius border-1 m-b20"><a
                                    class="icon-cell text-primary"><i class="fa-solid fa-user-lock"></i></a></div>
                            <div class="icon-content p-t40">
                                <h5 class="dlab-tilte text-uppercase">MƏXFİLİK</h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-full content-inner bg-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s"
             style="padding-top: 33px;">
            <div class="container">
                <div class="section-head text-black text-center">
                    <h2 class="title">Son layihələr</h2>
                    <p>
                        <button class="site-button" onclick="window.location = '{{ route('project.main') }}'">BÜTÜN
                            LAYİHƏLƏRƏ BAX
                        </button>
                    </p>
                </div>
                <div class="blog-carousel owl-carousel owl-btn-3 owl-btn-center-lr">
                    @foreach($projects as $project)
                        <div class="item">
                            <div class="blog-post blog-grid blog-rounded blog-effect1">
                                <div style="height: 220px;" class="dlab-post-media dlab-img-effect rotate">
                                    <a href="{{ $project->path() }}">
                                        <img style="min-height: 220px;" src="{{ $project->photo() }}" alt="">
                                    </a>
                                </div>
                                <div class="dlab-info p-a20 border-1">
                                    <div class="dlab-post-meta">
                                        @if ($project->status == 1)
                                            <div class="completedx">TAMAMLANIB</div>
                                        @else
                                            <div class="continuingx">DAVAM EDİR</div>
                                        @endif
                                        <ul>
                                            <li class="post-date"><strong>{{ $project->customer }}</strong></li>
                                        </ul>
                                    </div>
                                    <div class="dlab-post-title">
                                        <h4 class="post-title"><a href="{{ $project->path() }}">{{ $project->name }}</a>
                                        </h4>
                                    </div>
                                    <div class="dlab-post-text">
                                        <p>{{ $project->small_desc }}</p>
                                    </div>
                                    <div class="dlab-post-readmore">
                                        <a href="{{ $project->path() }}" title="READ MORE" rel="bookmark"
                                           class="site-button btnhover14">Ətraflı bax</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Partners -->
        <div class="section-full content-inner bg-gray wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
            <div class="container">
                <div class="section-head text-black text-center">
                    <h2 class="title">Tərəfdaşlarımız</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="img-carousel-dots owl-theme owl-dots-none owl-carousel owl-btn-center-lr owl-btn-3">
                            @foreach($partners as $partner)
                                <div class="item">
                                    <div class="service-box style1" style="height: 200px !important;">
                                        <img height="200" src="{{ asset('storage/'.$partner->logo) }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partners End -->

        <!-- Client logo -->
        <div class="section-full content-inner-2 bg-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
            <div class="container">
                <div class="section-head text-black text-center">
                    <h2 class="title text-capitalize">Müştərilərimiz</h2>
                </div>
                <div
                    class="client-logo-carousel owl-loaded owl-theme owl-carousel owl-dots-none owl-btn-center-lr owl-btn-3">
                    @foreach($clients as $client)
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo border">
                                    <a href="javascript:void(0);"><img src="{{ asset('storage/'.$client->logo) }}"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Client logo End -->

        <!-- blog grid -->
        <div class="section-full content-inner bg-gray wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
            <div class="container">
                <div class="section-head text-black text-center">
                    <h2 class="title">Son xəbərlər</h2>
                    <p>
                        <button class="site-button" onclick="alert('Səhifə məlumatları serverdən yüklənilir.')">BÜTÜN
                            XƏBƏRLƏRƏ BAX
                        </button>
                    </p>
                </div>
                <div id="masonry" class="dlab-blog-grid-3 row">
                    @foreach($blogs as $blog)
                        <div class="post card-container col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="blog-post blog-grid blog-rounded blog-effect1">
                                <div class="dlab-post-media dlab-img-effect" style="height: 200px;">
                                    <a href="blog-single.html"><img src="{{ asset('storage/'.$blog->main_photo) }}"
                                                                    alt=""></a>
                                </div>
                                <div class="dlab-info p-a20 border-1">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-date">
                                                <strong>{{ \Carbon\Carbon::make($blog->created_at)->toDateString() }}</strong>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dlab-post-title ">
                                        <h5 class="post-title"><a href="#">{{ $blog->title }}</a></h5>
                                    </div>
                                    <div class="dlab-post-text">

                                    </div>
                                    <div class="dlab-post-readmore text-center">
                                        <a onclick="alert('Səhifə məlumatları serverdən yüklənilir.')"
                                           title="Ətraflı oxu" rel="bookmark" class="site-button">OXU
                                            <i class="ti-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- blog grid END -->
    </div>
    <!-- contact area END -->
</div>
