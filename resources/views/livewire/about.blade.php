
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle text-center bg-pt" style="background-image:url({{ asset('images/banner/pb.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry align-m text-center">
                    <h1 class="text-white">Haqqımızda</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('main') }}">Ana səhifə</a></li>
                            <li>Haqqımızda</li>
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
                                    <img src="{{ asset('storage/'.$about->video_image) }}" alt="Signature">
                                    <div class="video-play-icon">
                                        <a href="{{ asset('storage/'.$about->video) }}" class="popup-youtube video bg-primary"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 m-b30 align-self-center video-infobx">
                                <div class="content-bx1">
                                    <h2 class="m-b15 title">{{ $about->title }}</span></h2>
                                    <p class="m-b30">{!! $about->desc !!} </p>
                                </div>
                            </div>
                            <p style="margin-top: -44px;">Bir şirkət olaraq, xidmətlərimizin yerinə yetirilməsində yalnız yüksək keyfiyyətli avadanlıqlardan istifadə edirik. Xidmətlərimiz və sistemlərimiz əlavə dəyəri olan peşəkar sənaye inşaat innovativ həllər təklif edir. Dəniz sənayesi, müdafiə sənayesi, avtomobil sənayesi və istehsal sənayesində ən qalıcı və rasional həllər təklif edirik. Dəniz sənayesinə dizayndan sona qədər hər mərhələdə səs -küy və vibrasiya izolyasiyası üzrə xidmətlər göstəririk. İstilik, səs -küy və vibrasiya izolyasiyası baxımından SEM analizini təklif edirik. Məhsul çeşidimizi və dizayn xidmətlərimizi mütəmadi olaraq geniş işçi qrupumuza çatdırırıq. Hər bir problem və ya ehtiyac üçün daimi və təsirli həllər təklif edərək işimizi davam etdiririk. Bizim üçün istilik izolyasiyası, səs -küy izolyasiyası, yüksək istilik izolyasiyası, kriogen izolyasiya, yanğın izolyasiyası, korroziyadan qorunma və kondensasiya nəzarəti ayrı həllər, ayrı məhsullar və ayrı dizaynlar tələb edən maddələrdir. Dizayn, təchizat, tətbiq, xidmətlərin sınanması və maksimum performans iş sahəmizdir. Əsas məqsədimiz, keyfiyyət və məmnunluq əsaslı iş prinsiplərimizlə , özümüzü yüksək səviyyəli peşəkar bir şirkət kimi elan etmək , izolyasiya xidmətləri sahəsində innovativ həllər təqdim etmək, təhlükəsizlik qaydalarına riayət etmək və onlara əməl olunmasının təşkili ilə mümkün qədər yerli bazarın inkişafını təmin edərək ölkəmizə faydalı olmaqdır.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Services info END -->
            <!-- Counter -->
            <div class="section-full content-inner overlay-black-dark bg-img-fix" style="background-image:url({{ asset('images/background/abg1.jpg') }});">
                <div class="container">
                    <div class="section-content text-center text-white">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-5">
                                    <div class="">
                                        <span class="counter">{{ $about->closed_projects }}</span>
                                    </div>
                                    <span class="counter-text">Tamamlanmış layihə</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-5">
                                    <div class="">
                                        <span class="counter">{{ $about->happy_clients }}</span>
                                    </div>
                                    <span class="counter-text">Məmnun müştəri</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-5">
                                    <div class="">
                                        <span class="counter">{{ $about->partners }}</span>
                                    </div>
                                    <span class="counter-text">Tərəfdaş</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-5">
                                    <div class="">
                                        <span class="counter">{{ $about->rewards }}</span>
                                    </div>
                                    <span class="counter-text">Mükafat</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter END -->
            <!-- Team Section -->
            <div class="section-full text-center bg-gray content-inner">
                <div class="container">
                    <div class="section-head text-black text-center">
                        <h2 class="title">Komandamızla tanış olun</h2>
                        <p>Biz komandada birgə işləməyə istiqamətlənirik və yalnız layihə boyu deyil, həm də onun başa çatdırılmasından sonra öz işimizin və müştərilərimizin arxasında möhkəm dayanırıq. Biz müştərinin dəyişən tendensiyalarına və tələblərinə uyğun olaraq uzunmüddətli münasibətlər və həllin daha da inkişaf etdirilməsini qururuq.
                        </p>
                    </div>
                    @foreach($teams as $key => $item)
                        <div class="row d-flex justify-content-around">
                            @foreach($item as $team)
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="dlab-box m-b30 dlab-team1">
                                        <div class="dlab-media">
                                            <a href="javascript:;">
                                                <img width="358" height="460" alt="" src="{{ asset('storage/'.$team['photo']) }}">
                                            </a>
                                        </div>
                                        <div class="dlab-info">
                                            <h4 class="dlab-title"><a href="javascript:;">{{ $team['fullname'] }}</a></h4>
                                            <span class="dlab-position">{{ @$team['position'][app()->getLocale()] }}</span>
                                            <ul class="dlab-social-icon dez-border">
                                                <li><a class="d-inline p-1" style="font-size: 13px;" href="mailto:{{ $team['email'] }}"><i class="fa fa-email"></i> {{ $team['email'] }}</a></li>
                                                <br/>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Team Section END -->

        </div>
        <!-- contact area END -->
    </div>
