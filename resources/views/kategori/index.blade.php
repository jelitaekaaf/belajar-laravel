<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

     <!-- Bootstrap Core CSS -->
     <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">

     <!-- MetisMenu CSS -->
     <link href="{{asset('admin/css/metisMenu.min.css')}}" rel="stylesheet">

     <!-- Timeline CSS -->
     <link href="{{asset('admin/css/timeline.css')}}" rel="stylesheet">

     <!-- Custom CSS -->
     <link href="{{asset('admin/css/startmin.css')}}" rel="stylesheet">

     <!-- Morris Charts CSS -->
     <link href="{{asset('admin/css/morris.css')}}" rel="stylesheet">

     <!-- Custom Fonts -->
     <link href="{{asset('admin/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            {{-- AWAL NAVBAR --}}
            @include('layouts.navbar')
            {{-- AKHIR NAVBAR --}}

         
        </nav>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse  navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"> WeTravel</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="login">
                    <i class="fa fa-user fa-fw"></i> Jelita <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('home')}}"><i class="fa fa-home fa-fw"></i> Home</a>
                    </li>
                    <li>
                        <a href="{{ route('kategori.index')}}"><i class="fa fa-table fa-fw"></i> Kategori</a>
                    </li>
                    <li>
                        <a href="{{ route('event.index')}}"><i class="fa fa-table fa-fw"></i> Event</a>
                    </li>
                    <li>
                        <a href="{{ route('lokasi.index')}}"><i class="fa fa-table fa-fw"></i> Lokasi</a>
                    </li>
                    <li>
                        <a href="{{ route('wisata.index')}}"><i class="fa fa-table fa-fw"></i> Wisata</a>
                    </li>
                 
                           
                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header "style="color:red"> <b>Selamat Datang di Kategori</b></h1>
                </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header"></div>
      
                      <div class="card-body">
                          <a href="{{route('kategori.create')}}" class="btn btn-primary">Add Data</a>                           
                          <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Id</th>
                                  <th scope="col">Name Category</th>
                                  <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                  @php    $no = 1; @endphp
                                  @foreach ($kategori as $data)
                                <tr>
                                  <th scope="row">{{$no++}}</th>
                                  <td>{{$data->id}}</td>
                                  <td>{{$data->nama_kategori}}</td>
                                  {{-- <td>
                                    <img src="{{ asset('/images/kategori/' . $data->cover) }}" width="100">  
                                  </td> --}}
                                 <form action="{{route('kategori.destroy', $data->id)}}" method="POST">
                                  @csrf
                                  @method('DELETE')  
                                  <td>
                                      <a href="{{route('kategori.edit', $data->id)}}" class="btn btn-success">Edit</a>
                                      <a href="{{route('kategori.show', $data->id)}}" class="btn btn-warning ">Show</a>
                                      <button type="submit" class="btn btn-danger"
                                      onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                      Delete
                                     </button>
                                     </td>
                                  </form>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                      </div>
                  </div>
              </div>
          </div>
            <!-- ... Your content goes here ... -->

        </div>
    </div>

</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>

</body>
</html>
