<div class="col-xl-8 col-lg-8">
    <div class="section-title section-2 mb-30">
        <h4 class="f-left">Latest News</h4>
        <div class="latest-newss-button f-right">
            <a href="#">View More <i class="far fa-long-arrow-right"></i></a>
        </div>
    </div>
    @foreach($posts as $post)
    <div class="row">
        <div class="col-xl-5 col-lg-6 mb-30">
            <div class="lifestyle-img">
                <a href="#"><img src="{{$post->image_url}}" alt=""></a>
            </div>
        </div>
        <div class="col-xl-7 col-lg-6 mb-30">
            <div class="lifestyle-text lifestyle-04-text">
                <span class="recent-cart color-5"><a href="#">travel</a></span>
                <h4><a href="#">{{$post->title}}</a></h4>
                <p>{{$post->excerpt}}</p>
                <div class="post-content-meta">
                    <span><a class="meta-11" href="#"><i class="far fa-clock"></i> 25 Nov 2019</a></span>
                    <span><a class="meta-11" href="#"><i class="far fa-comment"></i> (03)</a></span>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
