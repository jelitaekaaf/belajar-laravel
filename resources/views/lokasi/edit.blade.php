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
            <a class="navbar-brand" href="#">Destinasi Wisata</a>
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
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
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
                        <a href="#" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
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
                    <h1 class="page-header">Edit Data Lokasi</h1>
                </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header"></div>
                      <div class="card-body">
                        <form action="{{route('lokasi.update', $lokasi->id)}}" method="POST">
                        @csrf
                        @method('PUT')  
                          <div class="mb-3">
                            <label class="form-label">Name Location</label>
                            <input type="text" class="form-control" name="nama_lokasi" value="{{$lokasi->nama_lokasi}}">
                          </div>  
                         <div class="mb-3"> 
                            <label class="form-label"> Provinsi</label>
                            <input type="text" class="form-control" name="provinsi" value="{{$lokasi->provinsi}}">
                          </div> 
                          <div class="mb-3">
                            <label class="form-label"> Kabupaten</label>
                            <input type="text" class="form-control" name="kabupaten" value="{{$lokasi->kabupaten}}" >
                          </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="{{url('/lokasi')}}" class="btn btn-success">Back</a>     
                   
                          </form>
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
