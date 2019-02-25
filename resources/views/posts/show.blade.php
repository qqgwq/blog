@extends('main')

@section('title', '| View Post')

@section('content')
  <div class="row">
    <div class="col-md-8">
        <h1>{{$post->title}}</h1>

        <p class="lead">{{$post->body}}</p>
    </div>

    <div class="col-md-4">
      <div class="well">
        <dl class="dl-horizontal">
          <label>Url: </label>
          <p><a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug )}}</a></p>
        </dl>
        <dl class="dl-horizontal">
          <dt>Create At: </dt>
          <p>{{date('Y-m-d', strtotime($post->created_at))}}</p>
        </dl>
        <dl class="dl-horizontal">
          <dt>Last Updated:</dt>
          <p>{{date('Y-m-d', strtotime($post->updated_at))}}</p>
        </dl>
        
        <div class="row">
          <div class="col-sm-6">
            {!! Html::linkRoute('posts.edit', 'Edit', [$post->id], ['class' => 'btn btn-primary btn-block']) !!}
          </div>
          <div class="col-sm-6">
            {!! Form::open(['route' => ['posts.destroy', $post->id], "method" => 'DELETE'])!!}
            {!! Form::submit('Delete', ["class" => 'btn btn-danger btn-block'])!!}
            {!! Form::close() !!}
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            {!! Html::linkRoute('posts.index', '<<See All Posts', [], ['class' => 'btn btn-default btn-block btn-h1-spacing']) !!}
          </div>
          
        </div>
      </div>
    </div>
  </div>
  
@endsection

