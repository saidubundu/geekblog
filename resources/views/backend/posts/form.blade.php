<div class="card-body ">


        <div class="from-group {{ $errors->has('image')  ? 'has-error' : '' }}">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new img-thumbnail" style="width: 200px; height: 140px;">
                    <img src="{{$post->image_url}}"  alt="">
                </div>
                <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                <div>
                    <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>  {!! Form::file('image') !!}</span>
                    <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                </div>
            </div>


            @if($errors->has('title'))
                <span class="help-block">{{$errors->first('image')}}</span>
            @endif
        </div>



    <div class="from-group {{ $errors->has('title')  ? 'has-error' : '' }}">
        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>
        @if($errors->has('title'))
            <span class="help-block">{{$errors->first('title')}}</span>
        @endif
    </div>

    <br>
    <div class="form-group {{$errors->has('body') ? 'has-error' : ''}}">
        <div class="form-group">
            {!! Form::label('body', 'Body') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>40, 'id' => 'editor']) !!}
        </div>
        @if($errors->has('body'))
            <span class="help-block">{{$errors->first('body')}}</span>
        @endif

    </div>
    <br>
    <div class="from-group {{ $errors->has('category_id')  ? 'has-error' : '' }}">
        <div class="form-group">
            {!! Form::label('category', 'Category') !!}
            {!! Form::select('category_id',[''=>'Choose category']+ $category, null, ['class'=>'form-control']) !!}
        </div>
        @if($errors->has('category_id'))
            <span class="help-block">{{$errors->first('category_id')}}</span>
        @endif
    </div>
    <br>
    <div class="form-group">
            <label for="datetimepicker" class="title">Publish Date</label>
                <input type="text" name="published_at" value="{{old('published_at', $post->published_at)}}" id="datetimepicker"  class="form-control datetimepicker {{$errors->has('published_at') ? 'is-invalid' : ''}}"  />

        @if($errors->has('published_at'))
            <div class="invalid-feedback">
                <strong>{{$errors->first('published_at')}}</strong>
            </div>
        @endif
    </div>
</div>
<div class="card-footer clearfix">
    <div class="text-left">
        <a id="draft-btn" href="" class="btn btn-default">Draft</a>
    </div>
    <div class="text-right">
        {!! Form::submit('{{$buttonText}}', ['class'=>'btn btn-primary']) !!}
    </div>
</div>
