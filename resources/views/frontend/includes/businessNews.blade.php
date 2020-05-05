<div class="news-04-area pt-80 pb-50 grey-2-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-title mb-30">
                    <h4>Business News</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="news-04-active owl-carousel">
                @foreach($business as $bznz)
                <div class="col-xl-12">
                    <div class="recent-news-wrapper mb-30">
                        <div class="recent-news-img pos-rel">
                            <a href="#"><img src="{{$bznz->image_url}}" alt=""></a>
                            <div class="recent-news-text">
                                <span class="recent-cart color-4"><a href="#">building</a></span>
                                <h5><a href="#">Influential quarter, work
                                        igran hamper trade</a></h5>
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
</div>
