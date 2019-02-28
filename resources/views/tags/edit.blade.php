@extends('main')
@section('title', '| Edit Tag')

@section('content')
  <div class="row">
    <div class="col-md-8">
      {!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'put']) !!}
        <div class="form-group">
          {{ Form::label('name', "Name:") }}
          {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
          {{ Form::submit('Edit Tag', ['class' => "btn btn-success"]) }}
        </div>
      {!! Form::close()!!}
    </div>
  </div>
@endsection