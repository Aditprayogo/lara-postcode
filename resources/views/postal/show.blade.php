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

<table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th scope="col">No</th>     
        <th scope="col">Kodepos</th>
        <th scope="col">Desa</th>
        <th scope="col">Kecamatan</th>
        <th scope="col">Kota</th>
        <th scope="col">Provinsi</th>
      </tr>
    </thead>

    <?php $i = 1; ?>
    <tbody> 
        @foreach($kodepos as $pos)    
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>
                {{$pos->postal_code}}
            </td>
            <td>{{$pos->urban}}</td>
            <td>{{$pos->sub_district}}</td>
            <td>{{$pos->city}}</td>
            <td>{{$pos->provinsi->province_name}}</td>
        </tr>  
        @endforeach   
    </tbody>
</table>
    
@endsection

@section('scripts')

    <script>
    
        $(document).ready( function () {

            $('#myTable').DataTable();

        } );
      
    </script>
    
@endsection