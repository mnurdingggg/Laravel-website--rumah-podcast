<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dasboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">RUMAHPODCAST <sup>Menemani Kesepianmu</sup></div>
    </a>


    {{-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">welcome</div>
    </a>
     --}}
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

    

    

    
    
    <!-- Heading -->

    
    
    @if($user->level == 1)
    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
    
        </a>
         --}}
    {{-- </li> --}}
    @endif
    <!-- Nav Item - Utilities Collapse Menu -->
    @if($user->level == 2)
        {{-- <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                            
                </li>
            </a>
            
        </li> --}}
        @endif
    <!-- Nav Item - Utilities Collapse Menu -->
    @if($user->level == 3)
         <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                                            
                </li>
            </a>
            
        </li> 
        @endif
    
        @if($user->level == 4)
         <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                                            
                </li>
            </a>
            
        </li> 
        @endif
    
    <!-- Divider -->
    
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">

    </div>
    
    </ul>