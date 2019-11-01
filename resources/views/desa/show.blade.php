@extends('main')

@section('content')

<h1>Nama Desa Untuk Kecamatan {{$namaKecamatan}}</h1>

<table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th scope="col">No</th>     
        <th scope="col">Desa</th>
        <th scope="col">Kode Pos</th>
      </tr>
    </thead>

    <?php $i = 1; ?>
    <tbody>
        @foreach ($desas as $postal)
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$postal->urban}}</td>
            <td>
                <a href="{{route('kodepos.show', [$postal->province_code])}}">{{$postal->postal_code}}</a>         
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