<div class="col-xl-4 col-lg-6 mb-30">
    <div class="section-title mb-30">
        <h4>Health & Food News</h4>
    </div>
    <div class="hero-sidebar arrow-active owl-carousel">
        <div class="hero-post-item hero-post-item-2">
            @foreach($healths as $health)
            <div class="post-sm-list fix mb-20">
                <div class="post-sm-img f-left">
                    <a href="#"><img src="{{$health->image_url}}" alt=""></a>
                </div>
                <div class="post-2-content fix">
                    <div class="post-content-meta">
                        <span><a class="meta-1" href="#">Organic</a></span>
                        <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                    </div>
                    <h4><a href="#">{{str_limit($health->excerpt,40)}}</a></h4>
                </div>
            </div>
           @endforeach
        </div>
{{--        <div class="hero-post-item hero-post-item-2">--}}
{{--            <div class="post-sm-list fix mb-20">--}}
{{--                <div class="post-sm-img f-left">--}}
{{--                    <a href="#"><img src="assets/img/hero/t8.jpg" alt=""></a>--}}
{{--                </div>--}}
{{--                <div class="post-2-content fix">--}}
{{--                    <div class="post-content-meta">--}}
{{--                        <span><a class="meta-1" href="#">Organic</a></span>--}}
{{--                        <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>--}}
{{--                    </div>--}}
{{--                    <h4><a href="#">Bahurupi natya sangstha and  angan belgharia stage</a></h4>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="post-sm-list fix mb-20">--}}
{{--                <div class="post-sm-img f-left">--}}
{{--                    <a href="#"><img src="assets/img/hero/t9.jpg" alt=""></a>--}}
{{--                </div>--}}
{{--                <div class="post-2-content fix">--}}
{{--                    <div class="post-content-meta">--}}
{{--                        <span><a class="meta-1 meta-2" href="#">lemon</a></span>--}}
{{--                        <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>--}}
{{--                    </div>--}}
{{--                    <h4><a href="#">DDhaka international folk fest 2019 to open on november</a></h4>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="post-sm-list fix mb-20">--}}
{{--                <div class="post-sm-img f-left">--}}
{{--                    <a href="#"><img src="assets/img/hero/t10.jpg" alt=""></a>--}}
{{--                </div>--}}
{{--                <div class="post-2-content fix">--}}
{{--                    <div class="post-content-meta">--}}
{{--                        <span><a class="meta-1 meta-3" href="#">vegetables</a></span>--}}
{{--                        <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>--}}
{{--                    </div>--}}
{{--                    <h4><a href="#">Big firm products top worst plastic litter list report</a></h4>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="post-sm-list fix">--}}
{{--                <div class="post-sm-img f-left">--}}
{{--                    <a href="#"><img src="assets/img/hero/t11.jpg" alt=""></a>--}}
{{--                </div>--}}
{{--                <div class="post-2-content fix">--}}
{{--                    <div class="post-content-meta">--}}
{{--                        <span><a class="meta-1 meta-4" href="#">technology</a></span>--}}
{{--                        <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>--}}
{{--                    </div>--}}
{{--                    <h4><a href="#">Big firm products top worst plastic litter list report</a></h4>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
