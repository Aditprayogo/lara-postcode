@extends('main')

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