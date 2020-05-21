<div class="col-xl-3 col-lg-4">
    <div class="section-title mb-30">
        <h4>Sports News </h4>
    </div>
    <div class="arrow-active owl-carousel">
        @foreach($sports as $sport)
        <div class="recent-news-wrapper mb-30">

            <div class="recent-news-img pos-rel">
                <a href="#"><img src="{{$sport->image_url}}" alt=""></a>
                <div class="recent-news-text recent-news-02-text text-center">
                    <span class="recent-cart color-8"><a href="#">travel</a></span>
                    <h5><a href="{{$sport->url}}">{{$sport->title}}</a></h5>
                    <div class="post-content-meta news-02-meta">
                        <span><a class="meta-11 meta-22" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                    </div>
                </div>
            </div>

        </div>
        @endforeach

    </div>
</div>
