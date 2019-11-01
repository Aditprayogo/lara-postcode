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
      </tr>
    </thead>

    <?php $i = 1; ?>
    <tbody>   
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>
                {{$postalcode->postal_code}}
            </td>
            <td>{{$postalcode->urban}}</td>
            <td>{{$postalcode->sub_district}}</td>
            <td>{{$postalcode->city}}</td>
        </tr>   
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