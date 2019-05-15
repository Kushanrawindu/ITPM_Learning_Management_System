@if(count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif

@if(Session('success'))
  <div class="alert alert-success">
    <p>{{Session('success')}}</p>
  </div>
@endif

@if(Session('error'))
  <div class="alert alert-danger">
    <p>{{Session('error')}}</p>
  </div>
@endif
            