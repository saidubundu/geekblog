<div class="card-body table-full-width">
    <table class="table table-bigboy">
        <thead>
        <tr>
            <th class="text-center">Thumb</th>
            <th>Blog Title</th>
            <th>Category</th>
            <th class="text-left">Date</th>
            <th class="text-left">Views</th>
            <th class="text-left">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>
                    <div class="img-container">
                        <img src="{{$post->image_url}}" alt="...">
                    </div>
                </td>
                <td class="td-name">
                    {{$post->title}}
                </td>

                <td>{{$post->category->name}}</td>
                <td class="td-number"><abbr title="{{ $post->dateFormatted(true) }}">{{$post->dateFormatted()}}</abbr> | {!! $post->publicationLabel() !!}</td>
                <td class="td-number">
                    {{$post->view_count}}
                </td>
                <td class="td-actions">
                    <a href="{{$post->url}}" type="button" rel="tooltip" data-placement="left" title="" class="btn btn-info btn-link btn-icon" data-original-title="View Post">
                        <i class="fa fa-image"></i>
                    </a>
                    {!! Form::open(['method'=>'DELETE', 'route' =>['posts.destroy', $post->id]] ) !!}
                    <a href="{{route('posts.edit', $post->id)}}" type="button" rel="tooltip" data-placement="left" title="" class="btn btn-success btn-link btn-icon" data-original-title="Edit Post">
                        <i class="fa fa-edit"></i>
                    </a>
                    <button type="submit" rel="tooltip" data-placement="left" title="" class="btn btn-danger btn-link btn-icon " data-original-title="Trash Post">
                        <i class="fa fa-trash"></i>
                    </button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$posts->render()}}
</div>
