@extends('layouts.backend')
@section('content')
    <br>
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header ">
                <h4 class="card-title">Edit Post</h4>
            </div>
            {!! Form::model($post, ['method'=>'PUT', 'action'=> ['Backend\PostsController@update', $post->id], 'files'=> true, 'id' => 'post-form']) !!}

            @include('backend.posts.form')

            {!! Form::close() !!}
        </div>

    </div>
@stop
@include('script.script')
