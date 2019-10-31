@extends('main')

@section('content')


<table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">City</th>
        <th scope="col">Kecamatan</th>
        <th scope="col">Desa</th>
      </tr>
    </thead>

    <?php $i = 1; ?>
    <tbody>
        @foreach ($postalCodes as $postal)
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>
                <a href="{{route('kecamatan.show', [$postal->province_code])}}">{{$postal->city}}</a>
            </td>
            <td>
                {{$postal->sub_district}}
               
            </td>
            <td>{{$postal->urban}}</td>
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