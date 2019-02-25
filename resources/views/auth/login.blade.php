@extends('main')
@section('title', '| Login')

@section('content')

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h2>Login</h2>
        </div>
        <div class="panel-body">
          {!! Form::open() !!}
          
            <div class="form-group">
                {{ Form::label('email', "Email:") }}
                {{ Form::email('email', null, ['class' => 'form-control']) }}
            </div>
            
            <div class="form-group">
                {{ Form::label('password', "Password:") }}
                {{ Form::password('password', ['class' => 'form-control']) }}
            </div>

            {{ Form::checkbox('remember') }}{{ Form::label('remember', 'Remember Me') }}

            <div class="form-group">
              {{ Form::submit('Login', ['class' => 'btn btn-primary btn-block']) }}
            </div>

          <p><a href="{{ url('password/reset') }}">Forget My Password</a></p>
            
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@endsection