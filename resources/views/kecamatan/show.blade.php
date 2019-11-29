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

<h1>Kecamatan untuk Kota {{$city}}</h1>

<hr>

<table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th scope="col">No</th>     
        <th scope="col">Kecamatan</th>
        <th scope="col">Desa</th>
        <th scope="col">Kode Pos</th>
      </tr>
    </thead>

    <?php $i = 1; ?>
    <tbody>
        @foreach ($postalcodes as $postal)
        <tr>
            <th scope="row">{{$i++}}</th>
           
            <td>
                <a href="{{route('desa.show', ['id' => $postal->province_code, 'kecamatan' => Str::slug($postal->sub_district)])}}">{{$postal->sub_district}}</a>
            </td>
            <td>{{$postal->urban}}</td>
            
            <td> <a href="{{route('kodepos.show', ['id' => $postal->province_code, 'desa' => Str::slug($postal->urban), 'kecamatan' => Str::slug($postal->sub_district)])}}">{{$postal->postal_code}}</a>    </td>
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