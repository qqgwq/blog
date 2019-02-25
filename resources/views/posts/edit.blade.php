@extends('main')
@section('title', "| Edit Blog Post")

@section('content')
  <div class="row">
    {!! Form::model($post, ['route' =>['posts.update', $post->id], 'method' => 'PUT']) !!}
    <div class="col-md-8">
      {!! Form::label('title', 'Title:') !!}
      {!! Form::text('title', null, ["class" => 'form-control']) !!}

      {!! Form::label('slug', 'Slug:', ["class" => 'form-top']) !!}
      {!! Form::text('slug', null, ["class" => 'form-control']) !!}

      {!! Form::label('body', 'Body:', ["class" => 'form-top']) !!}
      {!! Form::textarea('body', null, ["class" => 'form-control']) !!}
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