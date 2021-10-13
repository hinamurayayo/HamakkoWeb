@extends('layouts.common')

@section('title','Webシステムなら | HamakkoWeb')

@section('scroll','navbar-bg-onscroll')

@section('promotion')
@endsection

@section('main_contents')
<main role="main">
    <!-- About -->
    <section class="u-content-space" id="js-scroll-to-section">
        <div class="container">
            <h2 class="text-center">ここは何のためのページ？</h2>

            <!-- Carousel -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div id="carouselExampleIndicators" class="carousel slide bg-light u-box-shadow-lg" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#" data-slide-to="0" class="rounded active"></li>
                            <li data-target="#" data-slide-to="1" class="rounded"></li>
                            <li data-target="#" data-slide-to="2" class="rounded"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 rounded" src="static/assets/img/getUserAgent.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="h2 font-weight-light mb-0">お前を見ている。</h5>
                                    <p class="lead">I'm Watching You.</p>
                                </div>
                            </div>
                            <!--
                            <div class="carousel-item">
                                <img class="d-block w-100 rounded" src="assets/img-temp/1920x1080/img2.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="h2 font-weight-light mb-0">Stream UI Kit</h5>
                                    <p class="lead">Forever Free, Open Source, Easy to Use!</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img class="d-block w-100 rounded" src="assets/img-temp/1920x1080/img9.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="h2 font-weight-light mb-0">Stream UI Kit</h5>
                                    <p class="lead">Forever Free, Open Source, Easy to Use!</p>
                                </div>
                            </div>
                            -->
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span aria-hidden="true">
                                <i class="fas fa-angle-left carousel-control-size"></i>
                            </span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span aria-hidden="true">
                                <i class="fas fa-angle-right carousel-control-size"></i>
                            </span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Carousel -->

            <!-- About Content -->
            <article class="w-md-75 mx-auto">
                <p class="lead font-weight-normal text-center mb-4">
                    SEO対策や、アフィリエイト研究を盛り込むページです。
                </p>
            </article>
            <!-- About Content -->
            <div class="col-lg-12">
                <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab-2" data-toggle="pill" href="#pills-home-2" role="tab" aria-controls="pills-home-2" aria-selected="true">
                            <i class="fa fa-taxi mr-1"></i> Your IP
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab-2" data-toggle="pill" href="#pills-profile-2" role="tab" aria-controls="pills-profile-2" aria-selected="false">
                            <i class="fa fa-mobile-alt mr-1"></i> Your Device
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab-2" data-toggle="pill" href="#pills-contact-2" role="tab" aria-controls="pills-contact-2" aria-selected="false">
                            <i class="fa fa-window-restore mr-1"></i> Your PlatForm
                        </a>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home-2" role="tabpanel" aria-labelledby="pills-home-tab-2">
                        <p>{{$ip}}</p>
                    </div>

                    <div class="tab-pane fade" id="pills-profile-2" role="tabpanel" aria-labelledby="pills-profile-tab-2">
                        <p>{{$browser_name}}</p>
                    </div>

                    <div class="tab-pane fade" id="pills-contact-2" role="tabpanel" aria-labelledby="pills-contact-tab-2">
                        <p>{{$platform}}</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <!-- End About -->
    <!-- End Other Components -->
</main>
@endsection
