@extends('main');
@section('title', '| All Posts')


@section('content')
  <div class="row">
    <div class="col-md-10">
      <h1>All Posts</h1>
    </div>
    <div class="col-md-2">
      <a href="{{ route('posts.create')}}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Posts</a>
    </div>
    <div class="col-md-12">
      <hr>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <th>#</th>
          <th>Title</th>
          <th>Body</th>
          <th>Created At</th>
          <th></th>
        </thead>
        <tbody>
          @foreach ($posts as $post)
            <tr>
              <td>{{$post->id}}</td>
              <td>{{$post->title}}</td>
              <td>{{ substr(strip_tags($post->body), 0, 50) }}{{ strlen(strip_tags($post->body)) > 50 ? "..." : "" }}</td>
              <td>{{date('Y-m-d', strtotime($post->created_at))}}</td>
              <td><a href="{{route("posts.show", $post->id)}}" class="btn btn-default">View</a></td>
              @if ((Auth::user()->name == $post->user->name))
                <td><a href="{{route("posts.edit", $post->id)}}" class="btn btn-default">Edit</a></td>
              @endif
            </tr>
          @endforeach 
        </tbody>
      </table>
      <div class="text-center">
        {!! $posts->links() !!}
      </div>
    </div>
  </div>
@stop