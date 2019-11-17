
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

               
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/journal/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}

        <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/material-kit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material-kit.css.map') }}">
    <link rel="stylesheet" href="{{ asset('css/material-kit.min.css') }}">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">



  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">

</head>

<body class="about-us sidebar-collapse">

  <!-- Navigation -->
  <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <a class="navbar-brand" href="/">lara-postcode</a>
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

  <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('{{ asset('img/bg7.jpg') }}'); transform: translate3d(0px, 0px, 0px); ">
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
  <div class="container mt-5">

    <hr>

    <div class="row mt-5">

      <div class="col-md-8">

        @yield('content')

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
          <h5 class="card-header">Categories</h5>
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
          <h5 class="card-header">Lara-postcode</h5>
          <div class="card-body">
            Lara-postcode merupakan website kode pos online yang di buat dengan Framework Laravel dan Bootstrap
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <hr>

  <!-- Footer -->
  <footer class="py-5 bg-danger">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; lara-postcode</p>
    </div>
    <!-- /.container -->
  </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> --}}



    <script type="text/javascript" charset="utf8" src="{{ asset('js/core/bootstrap-material-design.min.js') }}"></script>
    
    <script type="text/javascript" charset="utf8" src="{{ asset('js/core/pooper.min.js') }}"></script>
    
    <script type="text/javascript" charset="utf8" src="{{ asset('js/material-kit.min.js') }}"></script>
    <script type="text/javascript" charset="utf8" src="{{ asset('js/material-kit.js.map') }}"></script>
    <script type="text/javascript" charset="utf8" src="{{ asset('js/material-kit.js') }}"></script>
    
    <script type="text/javascript" charset="utf8" src="{{ asset('js/plugins/momment.min.js') }}"></script>
    
    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    
@yield('scripts')

</body>

</html>
