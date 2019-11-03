@extends('main')

@section('content')

<h1>Daftar Seluruh Kecamatan di indonesia</h1>

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
                <a href="{{route('desa.show', ['id' => $postal->province_code, 'kecamatan' => $postal->sub_district])}}">{{$postal->sub_district}}</a>
            </td>
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