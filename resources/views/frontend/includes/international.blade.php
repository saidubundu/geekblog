<div class="hero-02-area grey-2-bg pb-50 pt-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-title mb-30">
                    <h4>International </h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="news-active owl-carousel">
                @foreach($internations as $inter)
                <div class="col-xl-12">

                    <div class="hero-wrapper hero-04-wrapper mb-30">

                        <div class="hero-img pos-rel">
                            <a ><img src="{{$inter->image_url}}" alt=""></a>
                            <span><a class="post-cart color-8" href="#">travel</a></span>
                            <div class="hero-text">
                                <div class="hero-meta">
                                    <span><a href="{{$inter->user_url}}"><i class="far fa-user"></i> {{$inter->user->name}}</a></span>
                                    <span><i class="far fa-calendar-alt"></i> 12 July 2018</span>
                                </div>
                                <h3><a href="{{$inter->url}}">{{str_limit($inter->title, 50)}}</a></h3>
                                <a href="{{$inter->url}}"><span>Read More</span> <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>


                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
