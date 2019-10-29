@extends('main')

@section('content')

<table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Provinsi</th>
        <th scope="col">Kodepos</th>
        <th scope="col">Kabupaten</th>
      </tr>
    </thead>

    <?php $i = 1; ?>
    <tbody>
    @if ($provinsis)
        @foreach ($provinsis as $provinsi) 
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$provinsi->province_name}}</td>
                <td>Otto</td>
                <td>@mdo</td>
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