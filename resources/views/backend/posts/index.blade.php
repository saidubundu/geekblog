@extends('layouts.backend')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card table-big-boy">
                <div class="card-header ">
                    <div class="pull-left">
                        <h4 class="card-title">Post</h4>
                        <p class="card-category">All Posts</p>
                    </div>

                    <div class="pull-right" style="padding: 7px 0;">
                        <?php $links = [] ?>
                        @foreach($statusList as $key => $value)
                            @if($value)
                                <?php $selected = Request::get('status') == $key ? 'selected-status' : '' ?>
                                <?php $links[] = "<a class=\"{$selected}\" href=\"?status={$key}\">" . ucwords($key) . "({$value})</a>" ?>
                            @endif
                        @endforeach
                        {!! implode(' | ', $links) !!}
                    </div>
                    <br>
                </div>
                @if(session('message'))
                    <div class="alert alert-success">
                        <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                            <i class="nc-icon nc-simple-remove"></i>
                        </button>
                        <span>
                            <b> Success - </b> {{session('message')}}</span>
                    </div>
                    @elseif(session('trash-message'))
                    <div class="alert alert-warning">
                        <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                            <i class="nc-icon nc-simple-remove"></i>
                        </button>
                        <span>
                            <?php list($message, $postId) = session('trash-message')?>
                            <b> Success - </b> {{$message}}
                        {!! Form::open(['method'=>'PUT', 'route'=>['posts.restore', $postId]]) !!}
                            <button type="submit" rel="tooltip" data-placement="left" title="" class="btn btn-danger btn-link btn-icon " data-original-title="Undo delete">
                          <i class="fa fa-undo">Undo</i>
                             </button>
                            {!! Form::close() !!}
                        </span>
                    </div>
                @endif
                @if($onlyTrashed)
                    @include('backend.posts.table-trash')
                @else
                @include('backend.posts.table')
                    @endif
            </div>
        </div>
    </div>
    @stop
