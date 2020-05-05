<div class="hero-area pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 hero-big">
                <div class="section-title section-2 mb-30">
                    <h4 class="f-left">Movies</h4>
                    <div class="latest-newss-button f-right">
                        <a href="#">View More <i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="hero-wrapper mb-30">
                            <div class="hero-img pos-rel">
                                <a href="{{route('blog.show', $leftMovie->id)}}"><img src="{{$leftMovie->image_url}}" alt=""></a>
                                <span class="post-cart">musical</span>
                                <div class="hero-text">
                                    <div class="hero-meta">
                                        <span><a href="#"><i class="far fa-calendar-alt"></i> 12 July 2018</a></span>
                                        <span><i class="far fa-comment"></i> (05)</span>
                                    </div>
                                    <h3><a href="{{route('blog.show', $leftMovie->id)}}">{{$leftMovie->title}}</a></h3>
                                    <a href="{{route('blog.show', $leftMovie->id)}}"><span>Read More</span> <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="hero-post-item news-post-item news-post-item-2">
                            @foreach($movies as $movie)
                            <div class="post-sm-list fix mb-20">
                                <div class="post-sm-img f-left pos-rel">
                                    <a href="{{route('blog.show', $movie->id)}}"><img src="{{$movie->image_url}}" alt=""></a>
                                </div>
                                <div class="post-2-content fix">
                                    <span class="recent-cart color-7"><a href="#">health</a></span>
                                    <h4><a href="{{route('blog.show', $movie->id)}}">{{$movie->title}}</a></h4>
                                    <div class="post-content-meta">
                                        <span><a class="meta-11" href="#"><i class="far fa-user"></i> Kalima DJ</a></span>
                                        <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-6 d-md-none d-xl-block hero-sm">
                <div class="banner-2-img mb-30">
                    <a href="#"><img src="assets/img/banner/001.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
