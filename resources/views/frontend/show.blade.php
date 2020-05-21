@extends('layouts.frontend')
@section('content')

    <main>

        <!-- news-area-start -->
        <div class="news-area  hero-padding pt-80 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="layout-img mb-50">
                            <img src="{{$post->image_url}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="layout-wrapper layout-wrapper-02 mb-30">
                            <div class="lifestyle-wrapper mb-55">
                                <div class="lifestyle-text lifestyle-02-text">
                                    <span class="recent-cart color-1 mr-20"><a href="#">technology</a></span>
                                    <span class="post-box-cart1 mr-20"><a href="{{$post->user_url}}"><i class="far fa-user"></i>{{$post->user->name}}</a></span>
                                    <span class="post-box-cart1 mr-20"><a href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                    <span class="post-box-cart1"><a href="#"><i class="far fa-comment"></i> Comments (05)</a></span>

                                    <h4><a href="#">{{$post->title}}</a></h4>
                                    <p>{!! $post->body !!}</p>
                                </div>
                            </div>


                            <div class="banner-2-img mb-60">
                                <a href="#"><img src="{{asset('img/banner/004.jpg')}}" alt=""></a>
                            </div>

                            <div class="row">
                                <div class="col-xl-8 col-lg-7 col-md-6">
                                    <div class="blog-post-tag">
                                        <span>Tags : </span>
                                        <a href="#">News, </a>
                                        <a href="#">Blog,</a>
                                        <a href="#">Magazine,</a>
                                        <a href="#">Newspaper</a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-5 col-md-6">
                                    <div class="blog-share-icon text-left text-md-right">
                                        <span>Share: </span>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="author mt-55 mb-55 fix">
                                <div class="author-img f-left">
                                    <img src="assets/img/layout/author.jpg" alt="">
                                </div>
                                <div class="author-text fix">
                                    <h3>{{$post->user->name}}</h3>
                                    <p>Avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself</p>
                                    <div class="author-icon">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-30">
                                <div class="col-xl-12 mb-30">
                                    <div class="section-title mb-30">
                                        <h4>Related News</h4>
                                    </div>
                                    <div class="row">
                                        <div class="news-active owl-carousel">
                                            <div class="col-xl-12">
                                                <div class="postbox">
                                                    <div class="post-img">
                                                        <a href="#"><img src="assets/img/news/21.jpg" alt=""></a>
                                                    </div>
                                                    <div class="post-box-text mt-30">
                                                        <div class="post-box-meta">
                                                            <span class="post-box-cart color-2"><a href="#">historical</a></span>
                                                            <span class="post-box-cart1"><a href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                                        </div>
                                                        <h4><a href="#">Life Fun Science Fair 2019 programme Agami</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="postbox">
                                                    <div class="post-img">
                                                        <a href="#"><img src="assets/img/news/22.jpg" alt=""></a>
                                                    </div>
                                                    <div class="post-box-text mt-30">
                                                        <div class="post-box-meta">
                                                            <span class="post-box-cart color-1"><a href="#">storical</a></span>
                                                            <span class="post-box-cart1"><a href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                                        </div>
                                                        <h4><a href="#">Expecto Patronum!’ succ essfully hosted by Litm</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="postbox">
                                                    <div class="post-img">
                                                        <a href="#"><img src="assets/img/news/10.jpg" alt=""></a>
                                                    </div>
                                                    <div class="post-box-text mt-30">
                                                        <div class="post-box-meta">
                                                            <span class="post-box-cart color-5"><a href="#">horror</a></span>
                                                            <span class="post-box-cart1"><a href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                                        </div>
                                                        <h4><a href="#">Life Fun Science Fair 2019 programme Agami</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="postbox">
                                                    <div class="post-img">
                                                        <a href="#"><img src="assets/img/news/21.jpg" alt=""></a>
                                                    </div>
                                                    <div class="post-box-text mt-30">
                                                        <div class="post-box-meta">
                                                            <span class="post-box-cart color-2"><a href="#">historical</a></span>
                                                            <span class="post-box-cart1"><a href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                                        </div>
                                                        <h4><a href="#">Life Fun Science Fair 2019 programme Agami</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="postbox">
                                                    <div class="post-img">
                                                        <a href="#"><img src="assets/img/news/22.jpg" alt=""></a>
                                                    </div>
                                                    <div class="post-box-text mt-30">
                                                        <div class="post-box-meta">
                                                            <span class="post-box-cart color-1"><a href="#">storical</a></span>
                                                            <span class="post-box-cart1"><a href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                                        </div>
                                                        <h4><a href="#">Expecto Patronum!’ succ essfully hosted by Litm</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="postbox">
                                                    <div class="post-img">
                                                        <a href="#"><img src="assets/img/news/19.jpg" alt=""></a>
                                                    </div>
                                                    <div class="post-box-text mt-30">
                                                        <div class="post-box-meta">
                                                            <span class="post-box-cart color-5"><a href="#">horror</a></span>
                                                            <span class="post-box-cart1"><a href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                                        </div>
                                                        <h4><a href="#">Life Fun Science Fair 2019 programme Agami</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-comments">
                                <div class="section-title mb-30">
                                    <h4>Clients Reviews</h4>
                                </div>
                                <div class="latest-comments">
                                    <ul>
                                        <li>
                                            <div class="comments-box">
                                                <div class="comments-avatar">
                                                    <img src="assets/img/layout/01.png" alt="">
                                                </div>
                                                <div class="comments-text">
                                                    <div class="avatar-name">
                                                        <h5>Karon Balina</h5>
                                                        <span>19th May 2018</span>
                                                        <a class="reply" href="#"><i class="fas fa-reply"></i>Reply</a>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt
                                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                        exercitation
                                                        ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="children">
                                            <div class="comments-box">
                                                <div class="comments-avatar">
                                                    <img src="assets/img/layout/02.png" alt="">
                                                </div>
                                                <div class="comments-text">
                                                    <div class="avatar-name">
                                                        <h5>Julias Roy</h5>
                                                        <span>19th May 2018</span>
                                                        <a class="reply" href="#"><i class="fas fa-reply"></i>Reply</a>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt
                                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                        exercitation
                                                        ullamco laboris nisi ut aliquip.</p>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="comments-box">
                                                <div class="comments-avatar">
                                                    <img src="assets/img/layout/03.png" alt="">

                                                </div>
                                                <div class="comments-text">
                                                    <div class="avatar-name">
                                                        <h5>Arista Williamson</h5>
                                                        <span>19th May 2018</span>
                                                        <a class="reply" href="#"><i class="fas fa-reply"></i>Reply</a>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt
                                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                        exercitation
                                                        ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post-comments-form">
                                <div class="section-title mb-30">
                                    <h4>Leave A Reviews</h4>
                                </div>
                                <form id="contacts-form" class="conatct-post-form" action="#">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="contact-icon contacts-message">
                                                <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Your Comments...."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-icon contacts-name">
                                                <input type="text" placeholder="Your Name.... ">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-icon contacts-email">
                                                <input type="email" placeholder="Your Email....">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-icon contacts-website">
                                                <input type="text" placeholder="Your Website....">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <button type="submit">send comments</button>
                                        </div>
                                    </div>
                                </form>
                            </div>


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
                            <div class="hero-sidebar-item mb-60">
                                <div class="section-title mb-30">
                                    <h4>Recommended</h4>
                                </div>
                                <div class="hero-sidebar arrow-active owl-carousel">
                                    <div class="hero-post-item hero-post-item-2">
                                        <div class="post-sm-list fix mb-20">
                                            <div class="post-sm-img f-left">
                                                <a href="#"><img src="assets/img/news/t6.jpg" alt=""></a>
                                            </div>
                                            <div class="post-2-content fix">
                                                <div class="post-content-meta">
                                                    <span><a class="meta-1 meta-3" href="#">tech</a></span>
                                                    <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                                </div>
                                                <h4><a href="#">Big firm products top worst plastic litter list report</a></h4>
                                            </div>
                                        </div>
                                        <div class="post-sm-list fix mb-20">
                                            <div class="post-sm-img f-left">
                                                <a href="#"><img src="assets/img/news/t7.jpg" alt=""></a>
                                            </div>
                                            <div class="post-2-content fix">
                                                <div class="post-content-meta">
                                                    <span><a class="meta-1" href="#">sports</a></span>
                                                    <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                                </div>
                                                <h4><a href="#">Bahurupi natya sangstha and  angan belgharia stage</a></h4>
                                            </div>
                                        </div>
                                        <div class="post-sm-list fix mb-20">
                                            <div class="post-sm-img f-left">
                                                <a href="#"><img src="assets/img/news/t8.jpg" alt=""></a>
                                            </div>
                                            <div class="post-2-content fix">
                                                <div class="post-content-meta">
                                                    <span><a class="meta-1 meta-2" href="#">lifestryle</a></span>
                                                    <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                                </div>
                                                <h4><a href="#">DDhaka international folk fest 2019 to open on november</a></h4>
                                            </div>
                                        </div>
                                        <div class="post-sm-list fix">
                                            <div class="post-sm-img f-left">
                                                <a href="#"><img src="assets/img/news/t9.jpg" alt=""></a>
                                            </div>
                                            <div class="post-2-content fix">
                                                <div class="post-content-meta">
                                                    <span><a class="meta-1 meta-4" href="#">technology</a></span>
                                                    <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                                </div>
                                                <h4><a href="#">Big firm products top worst plastic litter list report</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hero-post-item hero-post-item-2">
                                        <div class="post-sm-list fix mb-20">
                                            <div class="post-sm-img f-left">
                                                <a href="#"><img src="assets/img/news/t6.jpg" alt=""></a>
                                            </div>
                                            <div class="post-2-content fix">
                                                <div class="post-content-meta">
                                                    <span><a class="meta-1 meta-3" href="#">tech</a></span>
                                                    <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                                </div>
                                                <h4><a href="#">Big firm products top worst plastic litter list report</a></h4>
                                            </div>
                                        </div>
                                        <div class="post-sm-list fix mb-20">
                                            <div class="post-sm-img f-left">
                                                <a href="#"><img src="assets/img/news/t7.jpg" alt=""></a>
                                            </div>
                                            <div class="post-2-content fix">
                                                <div class="post-content-meta">
                                                    <span><a class="meta-1" href="#">sports</a></span>
                                                    <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                                </div>
                                                <h4><a href="#">Bahurupi natya sangstha and  angan belgharia stage</a></h4>
                                            </div>
                                        </div>
                                        <div class="post-sm-list fix mb-20">
                                            <div class="post-sm-img f-left">
                                                <a href="#"><img src="assets/img/news/t8.jpg" alt=""></a>
                                            </div>
                                            <div class="post-2-content fix">
                                                <div class="post-content-meta">
                                                    <span><a class="meta-1 meta-2" href="#">lifestryle</a></span>
                                                    <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                                </div>
                                                <h4><a href="#">DDhaka international folk fest 2019 to open on november</a></h4>
                                            </div>
                                        </div>
                                        <div class="post-sm-list fix">
                                            <div class="post-sm-img f-left">
                                                <a href="#"><img src="assets/img/news/t9.jpg" alt=""></a>
                                            </div>
                                            <div class="post-2-content fix">
                                                <div class="post-content-meta">
                                                    <span><a class="meta-1 meta-4" href="#">technology</a></span>
                                                    <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                                </div>
                                                <h4><a href="#">Big firm products top worst plastic litter list report</a></h4>
                                            </div>
                                        </div>
                                    </div>
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
