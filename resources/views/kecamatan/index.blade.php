@extends('main')

@section('content')

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
           
            <td>{{$postal->sub_district}}</td>
            <td>{{$postal->urban}}</td>
            <td>{{$postal->postal_code}}</td>
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