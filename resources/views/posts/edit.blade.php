@extends('main')
@section('title', "| Edit Blog Post")

@section('stylesheets')
  {!! Html::style('css/select2.min.css') !!}
@endsection

@section('content')
  <div class="row">
    {!! Form::model($post, ['route' =>['posts.update', $post->id], 'method' => 'PUT']) !!}
    <div class="col-md-8">
      <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ["class" => 'form-control']) !!}
      </div>
      
      <div class="form-group">
        {!! Form::label('slug', 'Slug:', ["class" => 'form-top']) !!}
        {!! Form::text('slug', null, ["class" => 'form-control']) !!}
      </div>
     
      <div class="form-group">
        {{ Form::label('category_id', "Category:", ['class' => 'form-spacing-top']) }}
        {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
      </div>

      <div class="form-group">
        {{ Form::label('tag_id', "Tag:", ['class' => 'form-spacing-top']) }}
        {{ Form::select('tags[]', $tags, null, ['class' => 'form-control select-multi', 'multiple' => 'multiple']) }}
      </div>
     
    
      <div class="form-group">
        {{ Form::label('body', 'Body:', ["class" => 'form-top']) }}
        {{ Form::textarea('body', null, ["class" => 'form-control']) }}
      </div>
      
    </div>

    <div class="col-md-4">
      <div class="well">
        <dl class="dl-horizontal">
          <dt>Create At: </dt>
          <dd>{{date('Y-m-d', strtotime($post->created_at))}}</dd>
        </dl>
        <dl class="dl-horizontal">
          <dt>Last Updated:</dt>
          <dd>{{date('Y-m-d', strtotime($post->updated_at))}}</dd>
        </dl>
        <hr>
        <div class="row">
          <div class="col-sm-6">
            {!! Html::linkRoute('posts.show', 'Cancel', [$post->id], ['class' => 'btn btn-danger btn-block']) !!}
          </div>
          <div class="col-sm-6">
            {!! Form::submit('Save Changes', ['class' => 'btn btn-danger btn-block']) !!}
          </div>
        </div>
      </div>
    </div>
    {!! Form::close() !!}
  </div>
@stop

@section('scripts')
  <script type="text/javascript">
    $(".select-multi").select2();
  </script>
@endsection