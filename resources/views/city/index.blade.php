@extends('main')

@section('content')

<table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">City</th>
        <th scope="col">Kode pos</th>
      </tr>
    </thead>

    <?php $i = 1; ?>
    <tbody>
    @if ($postalcodes)
        @foreach ($postalcodes as $postalcode) 
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$postalcode->city}}</td>
                <td>{{$postalcode->postal_code}}</td>
               
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