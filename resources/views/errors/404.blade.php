@extends('main')

{{-- @section('page-header')
    <div class="page-header header-filter " data-parallax="true" style="background-image: url('{{ asset('img/monitor1.jpg') }}'); transform: translate3d(0px, 0px, 0px); ">
        <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
            <h1 class="title">About Us</h1>
            <h4>Meet the amazing team behind this project and find out more about how we work.</h4>
            </div>
        </div>
        </div>
    </div>
@endsection --}}

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