<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>rumah podcast</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

            @if($user->level == 1 || $user->level == 3)
            <li class="nav-item active">
            <a class="nav-link" href="/create">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Tambah Podcast</span></a>
            </li>
            @endif

            <li class="nav-item active">
                <a class="nav-link" href="/user">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Lihat Podcast</span></a>
            </li>

            @if($user->level == 1 || $user->level == 3)
            <li class="nav-item active">
                <a class="nav-link" href="/rumahpodcast">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Data Podcast</span></a>
            </li>
            @endif

            @if($user->level == 1)
            <li class="nav-item active">
                <a class="nav-link" href="/userdata">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>User Data</span></a>
            </li>
            @endif

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


            {{-- <li class="nav-item active">
                <a class="nav-link" href="/logout">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Logout</span></a>
            </li> --}}

            <!-- Divider -->
            <hr class="sidebar-divider">

            @if($user->level == 1 || $user->level == 3)
            <div class="container">
                <div class="display">
        
                </div>
        
                <div class="controllers">
        
                </div>
            </div>
            <script type="text/javascript" src="js\vrecorder.js"></script>
            @endif
          
            <!-- Divider -->
            

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
            </div>

            <!-- Sidebar Message -->
            
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
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
                        <h1 class="h3 mb-0 text-gray-800">Beranda</h1>

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
                       <!--  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm " data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                class="fas fa-download fa-sm text-white-50"></i> kritik dan saran</a> -->
                                {{-- <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                    class="fas fa-download fa-sm text-white-50"></i>
                                    kritik saran
                                  </button> --}}
                    

                    

                   
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">kritik saran</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="text" class="form-control" placeholder="Masukan Saran" aria-label="Username" aria-describedby="basic-addon1">

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Input Saran</button>
                            </div>
                          </div>
                        </div>
                      </div>

                    <!-- Content Row -->
                 
                    <!-- Content Row -->

                    <!-- Content Row -->
                    <div class="row">
                 
                        <div class="col-lg-10 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">RumahPodcast</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="siniar.pens.ac.id/wp-content/uploads/2023/10/SiniarPENS.png" alt="...">
                                    </div>
                                    <p></p>
                                    <a target="_blank" rel="nofollow" href="/user">lihat podcast lainnya &rarr;</a>
                                </div>
                            </div>

                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Recomendasi Podcast </h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <a href="/user"><img src="https://i.pinimg.com/564x/fb/2c/02/fb2c024fc9fbd4680690ae21b77d2a0a.jpg" class="card-img-top" style="width:30%;height:20%; "></a>
                                                <div class="card-body">
                                                    <h4>Genre:Horor</h4>
                                                    <p>Kisah ini Aisyah alami bermula ketika dirinya melakukan perjalanan pulang kampung dari Bekasi ke Lampung untuk mengambil ijazah miliknya.

                                                        Pada awal perjalanannya ke Lampung semua lancar aja, hingga beberapa hari setelahnya dirinya mengalami suatu kejadian diluar nalar ketika melakukan perjalanan balik.</p>
                                                    <a target="_blank" rel="nofollow" href="/user">lihat podcast lainnya &rarr;</a>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="col-md-4">
                                            <div class="card">
                                                <a href="/user"><img src="https://i.pinimg.com/564x/fb/2c/02/fb2c024fc9fbd4680690ae21b77d2a0a.jpg" class="card-img-top" style="width:30%;height:20%;justify-content: center; align-items: center;  "></a>
                                                <div class="card-body">
                                                    <h4>Genre:Inspirasi</h4>
                                                    <p>Dalam berproses menjadi sukses, membaca sangat penting. Selain itu, terdapat beberapa hal yang perlu dihilangkan jika kita ingin sukses. Yuk simak podcast kali ini, saya akan membagikan tips-tips agar kita menjadi sukses
                                                    </p>

                                                    <a target="_blank" rel="nofollow" href="/user">lihat podcast lainnya &rarr;</a>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="col-md-4">
                                            <div class="card">
                                                <a href="/user"><img src="https://i.pinimg.com/564x/fb/2c/02/fb2c024fc9fbd4680690ae21b77d2a0a.jpg" class="card-img-top" style="width:30%;height:20%; "></a>
                                                <div class="card-body">
                                                    <h4>Genre:Komedi</h4>
                                                    <p>Di obrolan kali ini Coki dan Muslim bercerita mengenai perjalanan pertamakali pertemuan mereka, awal mula mengeluarkan jokes-jokes yang diluar nurul manusia (dark jokes), hubungan nya yang renggang dengan habib ja’far, anaknya muslim yang akan di ajarkan membuat kendi oleh coki, rumah tretan muslim dikirimin hal-hal gaib, dan masih banyak lagi cerita seru lainnya..  
                                                        Penasaran kann ??? Yuk simak podcast kali ini</p>
                                                        <a target="_blank" rel="nofollow" href="/user">lihat podcast lainnya &rarr;</a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
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

    
       
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>