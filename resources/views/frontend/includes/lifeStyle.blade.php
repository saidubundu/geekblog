<div class="col-xl-6 col-lg-8">
    <div class="section-title mb-30">
        <h4>Lifestyles </h4>
    </div>
    <div class="row">
        <div class="news-02-active owl-carousel">
            @foreach($lifeStyle as $life)
            <div class="col-xl-12">

                <div class="recent-news-wrapper mb-30">

                    <div class="recent-news-img pos-rel">
                        <a href="#"><img src="{{$life->image_url}}" alt=""></a>
                        <div class="recent-news-text">
                            <span class="recent-cart color-4"><a href="#">building</a></span>
                            <h5><a href="#">{{$life->title}}</a></h5>
                            <div class="post-content-meta news-02-meta">
                                <span><a class="meta-11 meta-22" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            @endforeach

        </div>
    </div>
</div>
