@extends('main')

@section('title', '| View Post')

@section('content')
  <div class="row">
    <div class="col-md-8">
        <h1>{{$post->title}}</h1>

        <p class="lead">{!! $post->body !!}</p>

        <hr>

        <div class="tags">
          @foreach($post->tags as $tag)
          <span class="label label-default">{{ $tag->name }}</span>
          @endforeach
        </div>
        <div id="backend-comments" style="margin-top: 50px";>
          <h3>Comments <small>{{ $post->comments()->count() }} total</small></h3>

          <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Comment</th>
                <th width="70px"></th>
              </tr>
            </thead>
            <tbody>
              @foreach($post->comments as $comment)
                <tr>
                  <td>{{ $comment->name }}</td>
                  <td>{{ $comment->email }}</td>
                  <td>{{ $comment->comment }}</td>
                  <td>
                    @if (Auth::user()->name == $comment->user->name )
                      <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                      <a href="{{ route('comments.delete', $comment->id) }}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                    @endif
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
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
        <dl class="dl-horizontal">
          <dt>Category:</dt>
          <p>{{ $post->category->name }}</p>
        </dl>

        
        <div class="row">
          <div class="col-sm-6">
            {!! Html::linkRoute('posts.edit', 'Edit', [$post->id], ['class' => 'btn btn-primary btn-block']) !!}
          </div>
          @if ((Auth::user()->name == $post->user->name ))
            <div class="col-sm-6">
              {!! Form::open(['route' => ['posts.destroy', $post->id], "method" => 'DELETE'])!!}
              {!! Form::submit('Delete', ["class" => 'btn btn-danger btn-block'])!!}
              {!! Form::close() !!}
            </div>
          @endif
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

