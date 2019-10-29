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
   

        

        @foreach ($postalCodes as $postal)

        <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$postal->city}}</td>
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