<div class="page-content bg-white">
    <!-- inner page banner -->
<div class="dlab-bnr-inr overlay-black-middle text-center bg-pt" style="background-image:url({{ asset('images/banner/pb.jpg') }});">
<div class="container">
    <div class="dlab-bnr-inr-entry align-m text-center">
        <h1 class="text-white">Bizimlə əlaqə</h1>
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <ul class="list-inline">
                <li><a href="{{ route('main') }}">Ana səhifə</a></li>
                <li>Bizimlə əlaqə</li>
            </ul>
        </div>
        <!-- Breadcrumb row END -->
    </div>
</div>
</div>
<!-- inner page banner END -->

<!-- Contact Form -->
<div class="section-full content-inner contact-page-9 overlay-black-dark" style="background-image: url(images/background/bg5.jpg); background-position: 30% 100%">
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-12 text-white">
            <div class="row">
                <div class="col-lg-12 col-md-12 m-b30">
                    <div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
                        <div class="icon-content">
                            <h5 class="dlab-tilte">
                                <span class="icon-sm text-primary"><i class="ti-location-pin"></i></span>
                                Azərbaycan ünvanımız
                            </h5>
                            <p>{{ $contact->address }}</p>
                            <h6 class="m-b15 font-weight-400"><i class="ti-alarm-clock"></i> İş saatları</h6>
                            <p class="m-b0">Bazar ertəsi -  Şənbə 08:00 - 18.00</p>
                            <p>Bazar - İstirahət günü</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 m-b30">
                    <div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
                        <div class="icon-content">
                            <h5 class="dlab-tilte">
                                <span class="icon-sm text-primary"><i class="ti-email"></i></span>
                                E-poçt
                            </h5>
                            @foreach(explode(',',$contact->email) as $email)
                                <p class="m-b0">{{ $email }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 m-b30">
                    <div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
                        <div class="icon-content">
                            <h5 class="dlab-tilte">
                                <span class="icon-sm text-primary"><i class="ti-mobile"></i></span>
                            Telefon nömrələri
                            </h5>
                            @foreach(explode(',',$contact->numbers) as $number)
                                <p class="m-b0">{{ $number }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12 m-b30">
            <form class="inquiry-form wow box-shadow bg-white fadeInUp" data-wow-delay="0.2s">
                <h3 class="title-box font-weight-300 m-t0 m-b10">{{ $contact->title }}<span class="bg-primary"></span></h3>
                <p>{{ $contact->desc }}.</p>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="ti-user text-primary"></i></span>
                                <input name="dzName" type="text" required class="form-control" placeholder="Adınız">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="ti-mobile text-primary"></i></span>
                                <input name="dzOther[Phone]" type="text" required class="form-control" placeholder="Telefon nömrəsi">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="ti-email text-primary"></i></span>
                                <input name="dzEmail" type="email" class="form-control" required  placeholder="E-poçt ünvanınız" >
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-addon"><i class="ti-check-box text-primary"></i></span>
                                <select class="select">
                                    <option>Mövzu</option>
                                    <option>Xidmətlər</option>
                                    <option>Məhsullar</option>
                                    <option>Yeni layihə</option>
                                    <option>Davam edən layihə</option>
                                    <option>Texniki məsələ</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="ti-agenda text-primary"></i></span>
                                <textarea name="dzMessage" rows="4" class="form-control" required placeholder="Mesaj mətni"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <button name="submit" type="submit" value="Submit" class="site-button button-md"> <span>Göndər</span> </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- Contact Form END -->
</div>
