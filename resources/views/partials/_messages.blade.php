@if(Session::has('success'))
  <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
@endif

@if (count($errors) > 0)
  <div class="alert alert-danger" role="alert">
    <strong>Errors:</strong>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
