@extends('layouts.frontend')
@section('content')
    <main>

        <!-- breadcrumb-area-start -->
        <div class="breadcrumb-area pt-30 hero-padding">
            <div class="container">
                <div class="breadcrumb-bg  pt-115 pb-115" style="background-image:url({{asset('img/bg/bg-04.jpg')}})">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-text text-center">
                                <h1>Author</h1>
                                <ul class="breadcrumb-menu">
                                    <li><a href="index.html">home</a></li>
                                    <li><span>{{$userName}}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- news-area-start -->
        <div class="news-area pt-80 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="author-border mb-80">
                            <div class="row pb-50">
                                <div class="col-xl-6 col-lg-6 mb-30">
                                    <div class="author-1-img">
                                        <img src="assets/img/layout/author-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 mb-30">
                                    <div class="author-2-text">
                                        <h2>{{$user->name}}</h2>
                                        <p>{{$user->bio}}</p>
                                        <div class="social-icon">
                                            <a class="fb" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="twit" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="insta" href="#"><i class="fab fa-instagram"></i></a>
                                            <a class="pin" href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($userPost as $post)
                            <div class="col-xl-6 col-lg-6">
                                <div class="lifestyle-wrapper mb-30">
                                    <div class="lifestyle-img">
                                        <a href="{{$post->url}}"><img src="{{$post->image_url}}" alt=""></a>
                                    </div>
                                    <div class="lifestyle-text">
                                        <span class="recent-cart color-5"><a href="#">history</a></span>
                                        <h4><a href="{{$post->url}}">{{$post->title}}</a></h4>
                                        <p>{!! str_limit($post->body, 250) !!}</p>
                                        <div class="post-content-meta">
                                            <span><a class="meta-11" href="#"><i class="far fa-clock"></i> {{$post->created_at->diffForHumans()}}</a></span>
                                            <span><a class="meta-11" href="#"><i class="far fa-comment"></i> (03)</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="banner-2-img mt-30 mb-60">
                            <a href="#"><img src="{{asset('img/banner/004.jpg')}}" alt=""></a>
                        </div>

                    </div>
                    <div class="col-xl-4 col-lg-4 mb-30">
                        <div class="catagory-sidebar">
                            <div class="banner-2-img mb-60">
                                <a href="#"><img src="assets/img/banner/005.jpg" alt=""></a>
                            </div>
                            <div class="banner-2-img mb-60">
                                <div class="section-title mb-30">
                                    <h4>Popular Category </h4>
                                </div>
                                <a href="#"><img src="assets/img/banner/02.png" alt=""></a>
                            </div>
                            <div class="social-wrapper mb-60">
                                <div class="section-title mb-30">
                                    <h4>Join With Us</h4>
                                </div>
                                <div class="social-icon">
                                    <a class="fb" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="twit" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="insta" href="#"><i class="fab fa-instagram"></i></a>
                                    <a class="pin" href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a class="google" href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a>
                                    <a class="app" href="#"><i class="fab fa-app-store"></i></a>
                                    <a class="behance" href="#"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                            <div class="newsletter mb-60">
                                <div class="section-title mb-30">
                                    <h4>Newsletters</h4>
                                </div>
                                <div class="newsletter-wrapper" style="background-image:url(assets/img/hero/news.jpg)">
                                    <div class="newsletter-title">
                                        <h4>Subscribe Out Newsletters</h4>
                                        <h3>to get more news &amp; update</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo</p>
                                    </div>
                                    <form id="newsletter-form" action="#">
                                        <input type="text" placeholder="Enter your name ">
                                        <input type="email" placeholder="Enter your email">
                                        <div class="contacts-us-form-button text-center">
                                            <div class="newsletter-button">
                                                <button>Subscribe Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="popular-tag-sidebar">
                                <div class="section-title mb-30">
                                    <h4>Popular Tags</h4>
                                </div>
                                <div class="popular-tag">
                                    <a href="#">Newspaper</a>
                                    <a href="#">Magazine</a>
                                    <a href="#">Papers</a>
                                    <a href="#">Fashion</a>
                                    <a href="#">Lifestyle</a>
                                    <a href="#">Gym</a>
                                    <a href="#">News &amp; Blog</a>
                                    <a href="#">Sports</a>
                                    <a href="#">Music</a>
                                    <a href="#">Shopping</a>
                                    <a href="#">Swmming</a>
                                    <a href="#">Organic</a>
                                    <a href="#">Techonology</a>
                                    <a href="#">Travel</a>
                                    <a href="#">Lifestyle</a>
                                    <a href="#">Gaming</a>
                                </div>
                                <div class="banner-2-img mt-30">
                                    <a href="#"><img src="assets/img/banner/002.jpg" alt=""></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- news-area-end -->

        <!-- subscribe-area-start -->
        <div class="subscribe-area mb-80">
            <div class="container">
                <div class="subscribe-bg pt-80 pb-80" style="background-image:url(assets/img/bg/bg-05.jpg)">
                    <div class="row">
                        <div class="col-xl-8 col-lg-12 offset-xl-2">
                            <div class="subscribe-wrapper text-center">
                                <div class="subscribe-title">
                                    <h3>Subscribe Out Newsletters</h3>
                                    <h1>To get more news & update</h1>
                                </div>
                                <div class="newsletter-form">
                                    <form action="#">
                                        <input placeholder="Enter Your Email :" type="email">
                                        <button type="submit">Subscribe Now </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- subscribe-area-end -->

        <!-- breaking-news-area-start -->
        <div class="breaking-news-area">
            <div class="container">
                <div class="breaking-bg grey-bg">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="breaking-wrapper mb-20">
                                <div class="post-sm-list fix">
                                    <div class="post-sm-img f-left">
                                        <a href="#"><img src="assets/img/hero/b1.jpg" alt=""></a>
                                    </div>
                                    <div class="post-2-content fix">
                                        <div class="post-content-meta">
                                            <span><a class="meta-1" href="#">arts</a></span>
                                            <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                        </div>
                                        <h4><a href="#">Bahurupi natya sangst angan belhari stae</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="breaking-wrapper mb-20">
                                <div class="post-sm-list fix">
                                    <div class="post-sm-img f-left">
                                        <a href="#"><img src="assets/img/hero/b2.jpg" alt=""></a>
                                    </div>
                                    <div class="post-2-content fix">
                                        <div class="post-content-meta">
                                            <span><a class="meta-1 meta-2" href="#">lifestryle</a></span>
                                            <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                        </div>
                                        <h4><a href="#">Dhaka international folk 2019 to november</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 d-md-none d-lg-none d-xl-block">
                            <div class="breaking-wrapper mb-20">
                                <div class="post-sm-list fix">
                                    <div class="post-sm-img f-left">
                                        <a href="#"><img src="assets/img/hero/b3.jpg" alt=""></a>
                                    </div>
                                    <div class="post-2-content fix">
                                        <div class="post-content-meta">
                                            <span><a class="meta-1 meta-3" href="#">tech</a></span>
                                            <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                        </div>
                                        <h4><a href="#">Big firm products worst plastic litter report</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breaking-news-area-end -->



    </main>
    @stop
