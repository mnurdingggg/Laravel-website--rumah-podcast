<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dasboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">RUMAHPODCAST <sup>Menemani Kesepianmu</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="/dasboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span></a>
            </li>

                        <li class="nav-item active">
            <a class="nav-link" href="/create">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Tambah Podcast</span></a>
            </li>
             
             <li class="nav-item active">
                <a class="nav-link" href="/user">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Lihat Podcast</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="/rumahpodcast">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span> Data Podcast</span></a>
            </li>
            
                        <li class="nav-item active">
                <a class="nav-link" href="/userdata">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>User Data</span></a>
            </li>

            
            
            {{-- <li class="nav-item active">
                <a class="nav-link" href="/logout">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Logout</span></a>
            </li> --}}

            <!-- Divider -->
            <hr class="sidebar-divider">

        <div class="container">
        <div class="display"></div>

        <div class="controllers"><button id="record" onclick="record()">Start Recording</button></div>
    </div>
    <script type="text/javascript" src="js\vrecorder.js"></script>
              
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">

            <!-- Sidebar Message -->
            
        </div></ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    

                    <!-- Topbar Search -->
                    <form method="get"
                                 class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                 <div class="input-group">
                                     <input type="text" class="form-control bg-light border-0 small" placeholder="Cari Data Podcast"
                                         aria-label="Search" aria-describedby="basic-addon2" name="keyword">
                                     <div class="input-group-append">
                                         <button class="btn btn-primary" type="button">
                                             <i class="fas fa-search fa-sm"></i>
                                         </button>
                                     </div>
                                 </div>
                             </form>
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="/home" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                            aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                        placeholder="Search for..." aria-label="Search"
                                        aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                        <!-- Nav Item - Alerts -->
                   
                    

                        <!-- Nav Item - Messages -->
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="/home" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> {{$user->name}}</span>
                                <img class="img-profile rounded-circle"
                                    src="/air/{{$user->foto}}">
                            </a>
                        <!-- Nav Item - User Information -->
                        {{-- <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="/home" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle"
                                    src="/air/{{$user->foto}}">
                            </a> --}}
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                              
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Selamat Datang {{$user->name}}</h1>

                        
                        {{-- <h1 class="h3 mb-0 text-gray-400">selamat datang {{$user->name}}</h1> --}}
    <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary "
             data-bs-toggle="modal" data-bs-target="#simpan"> Logout</button>
            <div class="modal fade" id="simpan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="simpan">notifikasi</h5>
                      {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                    </div>
                    <div class="modal-body">
                      apakah anda yakin ingin keluar dari akun {{$user->name}}
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">tidak</button>
                         <a href="/logout" class="btn btn-primary">iyaa</a>      
                    </div>
                  </div>
                </div>
              </div>
</div>
                    <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">RumahPodcast</h6>
                        </div>
                        <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i>           Data Podcast {{$user->name}} </a>
                        {{-- <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i>Daftar Podcast</a> --}}
                            {{-- <form action="" method="get">
                                <input type="text" name="keyword" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                <button type="submit" class="input-group-text btn btn-warning">cari</button>
                            </form> --}}
                        <div class="card-body">
                            <div class="table-responsive">
                            <table border="1" class="table">
    <tr>
        <td>Namapodcast</td>
        <td>Judul</td>
        <td>Genre</td>
        <td>Tanggal</td>
        <td>Lihat</td>
        <td>Edit</td>
        <td>Download</td>
        <td>Delete</td>
        
    </tr>
    
     @foreach ($test as $cs)
     <tr>
         <td>{{$cs->Namapodcast}}</td>
         <td>{{$cs->Judul}}</td>
         <td>{{$cs->Genre}}</td>
         <td>{{$cs->Tanggal}}</td>
         <td><a href="{{url('/lihat',$cs->id)}}"> Lihat</td>
            {{-- class="btn btn-warning">View</a></td> --}}
         <td><a href="/rumahpodcast/{{$cs->id}}/edit">Edit</td>
        <td><a href="{{url('/download',$cs->Foto)}}" class="btn btn-secondary">Download</a></td>
        <td>
        <form onsubmit="return delete('{{$cs->name}}')" action="/rumahpodcast/{{$cs->id}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete">
     </tr>
     @endforeach
</table>
    <div class="my-5">
    {{$test->links()}}
    </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; RUMAHPODCAST 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>
<script>
    function deletedata(name){
            pesan =    confirm(apakah takun kamu ingin mendelete data  ${name} ini);
            if(pesan) return true;
            else return false;}
            </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>