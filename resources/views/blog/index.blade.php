@extends('main')
@section('title', '| Blog')

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Blog</h1>
    </div>
  </div>

  @foreach($posts as $post)
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2>{{$post->title}}</h2>
        <h5>Published: {{ date('Y-m-d', strtotime($post->created_at))}}</h5>
        <p>{{ substr($post->body, 0, 50) }}{{strlen($post->body) > 50 ? '...' : ''}}</p>
        <a href="{{ route('blog.single', $post->slug)}}" class="btn btn-default">Read More</a>
      </div>
      <hr>
    </div>
  @endforeach

  <div class="row">
    <div class="col-md-12">
      <div class="text-center">
        {!! $posts->links() !!}
      </div>
    </div>
  </div>
@endsection