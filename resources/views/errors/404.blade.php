@extends('main')

@section('content')
<div class="d-flex flex-row justify-content-center">
  <div class="col-md-12 text-center">
    <div class="alert alert-danger">
      <h1>404</h1>
      <h4>{{$exception->getMessage()}}</h4>
      <br>
      Page tidak tersedia
    </div>
  </div>
</div>
@endsection