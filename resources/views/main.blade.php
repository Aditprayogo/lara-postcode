
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>lara-postcode</title>

   <!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/material-kit.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/material-kit.css.map') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/material-kit.min.css') }}"> --}}

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">



  

  <style>
 
  
  </style>

</head>



<body class="about-us sidebar-collapse">

  <!-- Navigation -->
  <div class="first-container">
    
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-sm" color-on-scroll="300" id="sectionsNav" data-spy="affix">
        <div class="container">
        <a class="navbar-brand" href="/">
            
            <div class="logo-big">
                <img src="{{ asset('img/1200px-Laravel.svg.png') }}" class="img-fluid" width="20" height="20">&nbsp lara-postcode
            </div>
            
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('provinsi.index')}}">Home
                <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('home.about')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
  </div>

  <div class="page-header header-filter " data-parallax="true" style="background-image: url('{{ asset('img/bg2.jpg') }}'); transform: translate3d(0px, 0px, 0px); ">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h1 class="title">About Us</h1>
          <h4>Meet the amazing team behind this project and find out more about how we work.</h4>
        </div>
      </div>
    </div>
  </div>

  <!-- Page Content -->
  <div class="main main-raised">

  
  <div class="container mt-5">

    <hr>

    <div class="row mt-5">

      <div class="col-md-8">

        @yield('content')

        <br>
        

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        {{-- <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div> --}}

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header card-header-danger">Categories </h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="{{route('provinsi.index')}}">Provinsi</a>
                  </li>
                  <li>
                    <a href="{{route('city.index')}}">Kota</a>
                  </li>
                  <li>
                    <a href="{{route('kecamatan.index')}}">Kecamatan</a>
                  </li>
                
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="{{route('desa.index')}}">Desa</a>
                    </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
        <br>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header card-header-danger card-header-icon">Lara-postcode</h5>
          
          <div class="card-body">
            Lara-postcode merupakan website kode pos online yang di buat dengan Framework Laravel dan Bootstrap
          </div>
        </div>

      </div>
      {{-- end row 4 --}}

      <div class="about-office">
        <div class="row text-center">
            <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Our office is our second home</h2>
            <h4 class="description">Here are some pictures from our office. You can see the place looks like a palace and is fully equiped with everything you need to get the job done.</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img class="img-raised rounded img-fluid" alt="Raised Image" src="{{ asset('img/bali.jpg') }}" width="70%">
            </div>
            <div class="col-md-4">
                <img class="img-raised rounded img-fluid" alt="Raised Image" src="{{ asset('img/maluku.jpg') }}" width="70%">
            </div>
            <div class="col-md-4">
                <img class="img-raised rounded img-fluid" alt="Raised Image" src="{{ asset('img/aceh.jpg') }}">
            </div>
          
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <img class="img-raised rounded img-fluid" alt="Raised Image" src="{{ asset('img/maluku2.jpg') }}" width="70%">
            </div>
            <div class="col-md-4">
                <img class="img-raised rounded img-fluid" alt="Raised Image" src="{{ asset('img/danau.jpg') }}" width="100%">
            </div>
           
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
  <br>

</div>

 <hr>

  <!-- Footer -->
  <footer class="py-5 bg-danger">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; lara-postcode</p>
    </div>
    <!-- /.container -->
  </footer>


    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> --}}


    <script type="text/javascript"  src="{{ asset('js/core/jquery.min.js') }}"></script>

    <script type="text/javascript"  src="{{ asset('js/core/popper.min.js') }}"></script>

    <script type="text/javascript"  src="{{ asset('js/core/bootstrap-material-design.min.js') }}"></script>
    
    
    {{-- <script type="text/javascript"  src="{{ asset('js/material-kit.min.js') }}"></script> --}}
    <script type="text/javascript"  src="{{ asset('js/material-kit.js.map') }}"></script>

    <script type="text/javascript"  src="{{ asset('js/material-kit.js?v=2.0.6') }}"></script>
    
    <script type="text/javascript"  src="{{ asset('js/plugins/momment.min.js') }}"></script>

    <script type="text/javascript"  src="{{ asset('js/plugins/nouislider.min.js') }}"></script>
    
    
    <script type="text/javascript"  src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

    {{-- <script src="assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script> --}}



    

    <script type="text/javascript">

        // $('nav').affix({
        //     offset: {
        //         top: $('#services').offset().top
        //     }
        // });	
    

    </script>
    
@yield('scripts')

</body>

</html>
