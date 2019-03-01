@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')
  {!! Html::style('css/parsley.css') !!}
  {!! Html::style('css/select2.min.css') !!}
  <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
  <script>
    tinymce.init({ 
      selector:'textarea'
    });
  </script>
@endsection

@section('content')

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Create New Post</h1>
      <hr>
      {!! Form::open(['route' => 'posts.store', "method" => "post"]) !!}
        {{ Form::label('title', 'Title:')}}
        {{ Form::text('title', null, array('class' => 'form-control'))}}

        {{ Form::label('slug', 'Slug:') }}
        {{ Form::text('slug', null, array('class' => 'form-control', 'minlength' => '5', 'maxlength' => '255'))}}

        {{ Form::label('category_id', 'Category:') }}
				<select class="form-control" name="category_id">
					@foreach($categories as $category)
						<option value='{{ $category->id }}'>{{ $category->name }}</option>
					@endforeach

        </select>
        
        {{ Form::label('tag_id', 'Tag:') }}
				<select class="form-control select-multi" name="tags[]" multiple="multiple">
					@foreach($tags as $tag)
						<option value='{{ $tag->id }}'>{{ $tag->name }}</option>
					@endforeach

				</select>

        {{ Form::label('body', 'Post Body:')}}
        {{ Form::textarea('body', null, array('class' => 'form-control'))}}

        {{ Form::submit('Create Post', array("class" => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px'))}}
      {!! Form::close() !!}
    </div>
  </div>
@endsection

@section('scripts')
  <script type="text/javascript">
    $(".select-multi").select2();
  </script>
@endsection