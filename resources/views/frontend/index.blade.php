@extends('layouts.frontend')

@section('content')

    <main>

        <!-- slider-area-start -->
        <div class="slider-area pt-30 hero-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider-img">
                            <img src="/img/slider/01.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider-area-end -->

        <!-- news-data-area-start -->
        <div class="news-data-area mb-10">
            <div class="container">
                <div class="news-data-bg">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="news-data-wrapper mb-30">
                                <div class="news-data-text">
                                    <div class="post-box-meta">
                                        <span class="post-box-cart color-1"><a href="#">world</a></span>
                                        <span class="post-box-cart1"><a href="#"><i class="far fa-calendar-alt"></i> 25 Nov 2019</a></span>
                                    </div>
                                    <h3><a href="#">Five day hackers beer raced brouh under.</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="news-data-wrapper mb-30">
                                <div class="news-data-text">
                                    <div class="post-box-meta">
                                        <span class="post-box-cart color-2"><a href="#">fashion</a></span>
                                        <span class="post-box-cart1"><a href="#"><i class="far fa-calendar-alt"></i> 25 Nov 2019</a></span>
                                    </div>
                                    <h3><a href="#">National Classic Fesval held Mymen singh.</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 d-md-none d-lg-block">
                            <div class="news-data-wrapper mb-30">
                                <div class="news-data-text">
                                    <div class="post-box-meta">
                                        <span class="post-box-cart color-3"><a href="#">world</a></span>
                                        <span class="post-box-cart1"><a href="#"><i class="far fa-calendar-alt"></i> 25 Nov 2019</a></span>
                                    </div>
                                    <h3><a href="#">Air purifiers tackling the invisible threat home
                                        </a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- news-data-area-end -->

        <!-- breaking-2-area-start -->
        @include('frontend.includes.breakingNews')
        <!-- breaking-2-area-end -->

        <!-- news-04-area-start -->
        @include('frontend.includes.businessNews')
        <!-- news-04-area-end -->

        <!-- hero-area-start -->
        @include('frontend.includes.movieNews')
        <!-- hero-area-end -->

        <!-- news-03-area-start -->
        <div class="news-03-area">
            <div class="container">
                <div class="row">
                    @include('frontend.includes.lifeStyle')
                    @include('frontend.includes.sports')
                    <div class="col-xl-3 col-lg-6 d-lg-none d-xl-block mb-30">
                        <div class="section-title mb-30">
                            <h4>Columnists</h4>
                        </div>
                        <div class="hero-sidebar arrow-active owl-carousel">
                            <div class="hero-post-item hero-post-item-3">
                                <div class="post-sm-list fix mb-20">
                                    <div class="post-sm-img f-left">
                                        <a href="#"><img src="assets/img/news/t1.png" alt=""></a>
                                    </div>
                                    <div class="post-content fix">
                                        <h4><a href="#">DPL to return layer transfer system </a></h4>
                                        <span>Johnie D. Pena</span>
                                    </div>
                                </div>
                                <div class="post-sm-list fix mb-20">
                                    <div class="post-sm-img f-left">
                                        <a href="#"><img src="assets/img/news/t2.png" alt=""></a>
                                    </div>
                                    <div class="post-content fix">
                                        <h4><a href="#">Climate Disasters hildren face risk</a> </h4>
                                        <span>Johnie D. Pena</span>
                                    </div>
                                </div>
                                <div class="post-sm-list fix mb-20">
                                    <div class="post-sm-img f-left">
                                        <a href="#"><img src="assets/img/news/t3.png" alt=""></a>
                                    </div>
                                    <div class="post-content fix">
                                        <h4><a href="#">Will the real custo dians please stan </a>  </h4>
                                        <span>Johnie D. Pena</span>
                                    </div>
                                </div>
                                <div class="post-sm-list fix">
                                    <div class="post-sm-img f-left">
                                        <a href="#"><img src="assets/img/news/t4.png" alt=""></a>
                                    </div>
                                    <div class="post-content fix">
                                        <h4><a href="#">Will the real custo dians please stan </a>  </h4>
                                        <span>Johnie D. Pena</span>
                                    </div>
                                </div>
                                <div class="latest-newss-button mt-20">
                                    <a href="#">View More <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="hero-post-item hero-post-item-3">
                                <div class="post-sm-list fix mb-20">
                                    <div class="post-sm-img f-left">
                                        <a href="#"><img src="assets/img/news/t1.png" alt=""></a>
                                    </div>
                                    <div class="post-content fix">
                                        <h4><a href="#">DPL to return layer transfer system </a></h4>
                                        <span>Johnie D. Pena</span>
                                    </div>
                                </div>
                                <div class="post-sm-list fix mb-20">
                                    <div class="post-sm-img f-left">
                                        <a href="#"><img src="assets/img/news/t2.png" alt=""></a>
                                    </div>
                                    <div class="post-content fix">
                                        <h4><a href="#">Climate Disasters hildren face risk</a> </h4>
                                        <span>Johnie D. Pena</span>
                                    </div>
                                </div>
                                <div class="post-sm-list fix mb-20">
                                    <div class="post-sm-img f-left">
                                        <a href="#"><img src="assets/img/news/t3.png" alt=""></a>
                                    </div>
                                    <div class="post-content fix">
                                        <h4><a href="#">Will the real custo dians please stan </a>  </h4>
                                        <span>Johnie D. Pena</span>
                                    </div>
                                </div>
                                <div class="post-sm-list fix">
                                    <div class="post-sm-img f-left">
                                        <a href="#"><img src="assets/img/news/t4.png" alt=""></a>
                                    </div>
                                    <div class="post-content fix">
                                        <h4><a href="#">Will the real custo dians please stan </a>  </h4>
                                        <span>Johnie D. Pena</span>
                                    </div>
                                </div>
                                <div class="latest-newss-button mt-20">
                                    <a href="#">View More <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- news-03-area-end -->

        <!-- banner-area-start -->
        <div class="banner-area pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="banner-2-img">
                            <a href="#"><img src="{{asset('img/banner/banner.03.jpg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner-area-end -->

        <!-- hero-02-area-start -->
        @include('frontend.includes.international')
        <!-- hero-02-area-end -->

        <!-- latest-news-area-start -->
        <div class="latest-news-area pt-80 pb-50">
            <div class="container">
                <div class="row">
                    @include('frontend.includes.latestNews')
                    <div class="col-xl-4 col-lg-4 mb-30">
                        @include('frontend.includes.local')
                        <div class="news-tab mb-25">
                            <ul class="nav product-nav" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                        Most Popular
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                        More Read
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="product-tab-content">
                                    <div class="tab-content" id="myTabContent">
                                        @include('frontend.includes.mostPopular')
                                        @include('frontend.includes.mostRead')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- latest-news-area-end -->

        <!-- banner-area-start -->
        <div class="banner-area pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="banner-2-img">
                            <a href="#"><img src="{{asset('img/banner/02.jpg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner-area-end -->

        <!-- mews-05-area-start -->
{{--       @include('frontend.includes.multimedia')--}}
        <!-- mews-05-area-end -->

        <!-- news-03-area-start -->
        <div class="news-03-area pt-80 pb-50">
            <div class="container">
                <div class="row">
                    @include('frontend.includes.health')
                    @include('frontend.includes.tech')
                    @include('frontend.includes.tags')
                </div>
            </div>
        </div>
        <!-- news-03-area-end -->

        <!-- banner-area-start -->
        <div class="banner-area pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-12 offset-xl-2">
                        <div class="banner-2-img">
                            <a href="#"><img src="/img/banner/003.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner-area-end -->
    </main>

    @stop
