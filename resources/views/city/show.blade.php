@extends('main')

@section('content')


<h1>Daftar Kota Untuk Provinsi {{$province->province_name}}</h1>

<hr>

<table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">City</th>
      
      </tr>
    </thead>

    <?php $i = 1; ?>
    <tbody>
        @foreach ($postalCodes as $postal)
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>
                <a href="{{route('kecamatan.show', ['id' => $postal->province_code, 'cityname' => Str::slug($postal->city)])}}">{{$postal->city}}</a>
            </td>
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