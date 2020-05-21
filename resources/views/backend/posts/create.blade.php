@extends('layouts.backend')
@section('content')
    <br>
    <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h4 class="card-title">Create New Post</h4>
                </div>
                {!! Form::model($post, ['method'=>'POST', 'action'=> 'Backend\PostsController@store', 'files'=> true, 'id' => 'post-form']) !!}

                @include('backend.posts.form',['buttonText' => 'Ask Question'])

                {!! Form::close() !!}
            </div>

    </div>
@stop
@include('script.script')
