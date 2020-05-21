<div class="section-title section-2 mb-30">
    <h4 class="f-left">Country News</h4>
    <div class="latest-newss-button f-right">
        <a href="">View More <i class="far fa-long-arrow-right"></i></a>
    </div>
</div>
@foreach($local as $own)
<div class="lifestyle-wrapper mb-60">
    <div class="lifestyle-img">
        <a href="#"><img src="{{$own->image_url}}" alt=""></a>
    </div>
    <div class="lifestyle-text">
        <span class="recent-cart color-3"><a href="#">official</a></span>
        <h4><a href="{{$own->url}}">{{$own->title}}</a></h4>
        <p>{!! str_limit($own->body, 200) !!}</p>
    </div>
</div>
    @endforeach
