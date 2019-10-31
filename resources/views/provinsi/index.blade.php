@extends('main')

@section('content')

<h1>Daftar Seluruh Provinsi Indonesia</h1>

<hr>

<table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Provinsi</th>
      </tr>
    </thead>

    <?php $i = 1; ?>
    <tbody>
    @if ($provinsis)     
        @foreach ($provinsis as $provinsi)                                      
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>
                    <a href="{{route('city.show', [$provinsi->province_code])}}">{{$provinsi->province_name}}</a>
                </td>                                                           
            </tr>          
        @endforeach     
    @endif
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