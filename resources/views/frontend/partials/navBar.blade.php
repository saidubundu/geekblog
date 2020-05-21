@foreach($navCategories as $category)
    <li class="static"><a href="{{route('category', $category->id)}}">{{$category->name}}</a></li>
@endforeach
