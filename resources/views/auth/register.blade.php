@extends('main')
@section('title', '| Register')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel-default">
        <div class="panel-heading">
          <h3>Register</h3>
        </div>
        <div class="panel-body">
          {!! Form::open(['id' => 'signup']) !!}
            <div class="form-group">
              {{ Form::label('name', "Name:") }}
              {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
              {{ Form::label('email', 'Email:') }}
              {{ Form::email('email', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
              {{ Form::label('password', 'Password:') }}
              {{ Form::password('password',['class' => 'form-control']) }}
            </div>

            <div class="form-group">
              {{ Form::label('password_confirmation', 'Confirm Password:') }}
              {{ Form::password('password_confirmation',['class' => 'form-control']) }}
            </div>

            <div class="form-group">
              {{ Form::submit('Register', ['class' => 'btn btn-primary btn-block']) }}
            </div>
          {!! Form::close()!!}
        </div>
      </div>
    </div>
  </div>
@endsection