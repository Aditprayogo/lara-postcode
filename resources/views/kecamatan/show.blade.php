@extends('main')

@section('content')


<table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Kecamatan</th>
        <th scope="col">Kode Pos</th>
      </tr>
    </thead>

    <?php $i = 1; ?>
    <tbody>
        @foreach ($kecamatans as $kecamatan)
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$kecamatan->sub_district}}</td>
            <td>{{$kecamatan->postal_code}}</td>
           
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