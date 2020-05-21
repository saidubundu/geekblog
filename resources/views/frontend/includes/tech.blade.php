<div class="col-xl-4  col-lg-6">
    <div class="section-title mb-30">
        <h4>Technology</h4>
    </div>
    <div class="arrow-active owl-carousel">
        @foreach($techs as $tech)
        <div class="hero-item mb-30">
            <div class="hero-wrapper hero-03-wrapper">
                <div class="hero-img pos-rel">
                    <a ><img src="{{$tech->image_url}}" alt=""></a>
                    <span><a class="post-cart" href="#">fashion</a></span>
                    <div class="hero-text">
                        <div class="hero-meta">
                            <span><a href="#"><i class="far fa-calendar-alt"></i> 12 July 2018</a></span>
                            <span><i class="far fa-comment"></i> (05)</span>
                        </div>
                        <h3><a href="{{$tech->url}}">{!! str_limit($tech->body, 50) !!}</a></h3>
                        <a href="{{$tech->url}}"><span>Read More</span> <i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
