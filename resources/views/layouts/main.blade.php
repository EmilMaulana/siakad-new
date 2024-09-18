<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> SIAKAD</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f1ecbb1f89.js" crossorigin="anonymous"></script>
    <link href="{{ asset('theme/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('theme/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/css/style.css') }}" rel="stylesheet">
    @livewireStyles()

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


</head>

<body id="page-top" class="badan">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-white sidebar sidebar-light accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                {{-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> --}}
                <div class="sidebar-brand-text mx-3">SIAKAD <sup>v1</sup></div>
            </a>
            @can('admin')
            <!-- Heading -->
            <div class="sidebar-heading">
                DATA DASAR
            </div>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'bg-primary text-white' : '' }}"
                    href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('data-siswa', 'siswa-show', 'siswa-edit') ? 'bg-primary text-white' : '' }}"
                    href="/admin/data-siswa">
                    <i class="fa-solid fa-users"></i>
                    <span>Data Siswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('unit-akademik', 'ruang-kelas', 'tahun-angkatan') ? 'bg-primary text-white' : '' }}"
                    href="/admin/unit-akademik">
                    <i class="fas fa-folder-open"></i>
                    <span>Unit Akademik</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin-home') ? 'bg-primary text-white' : '' }}"
                    href="/admin-home">
                    <i class="fas fa-school"></i>
                    <span>Ruang Kelas</span>
                </a>
            </li>
            <div class="sidebar-heading">
                PRA PEMBELAJARAN
            </div>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin-home') ? 'bg-primary text-white' : '' }}"
                    href="/admin-home">
                    <i class="fas fa-calendar"></i>
                    <span>Tahun Ajaran</span>
                </a>
            </li>
            <div class="sidebar-heading">
                PENGATURAN SISTEM
            </div>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin-home') ? 'bg-primary text-white' : '' }}"
                    href="/admin-home">
                    <i class="fas fa-user-cog"></i>
                    <span>User</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin-home') ? 'bg-primary text-white' : '' }}"
                    href="/admin-home">
                    <i class="fas fa-users-gear"></i>
                    <span>Role</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin-home') ? 'bg-primary text-white' : '' }}"
                    href="/admin-home">
                    <i class="fas fa-sliders"></i>
                    <span>Setting</span>
                </a>
            </li>
            @endcan

            @cannot('admin')
            <!-- Nav Item - Dashboard USER-->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'bg-primary text-white' : '' }}"
                    href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Dasar
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('biodata-siswa','riwayat-akademik', 'riwayat-registrasi', 'kurikulum') ? 'bg-primary text-white' : '' }}"
                    href="/biodata-siswa">
                    <i class="fas fa-users"></i>
                    <span>Biodata Siswa</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                PRA PEMBELAJARAN
            </div>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('rencana-studi') ? 'bg-primary text-white' : '' }}"
                    href="/rencana-studi">
                    <i class="fas fa-rss"></i>
                    <span>Rencana Studi</span></a>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading">
                PEMBELAJARAN
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('jadwal-pembelajaran') ? 'bg-primary text-white' : '' }}"
                    href="/jadwal-pembelajaran">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Jadwal Pembelajaran</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('hasil-pembelajaran') ? 'bg-primary text-white' : '' }}"
                    href="/hasil-pembelajaran">
                    <i class="fas fa-list-alt"></i>
                    <span>Hasil Pembelajaran</span></a>
            </li>
            @endcannot


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center  d-none d-md-inline ">
                <button class="rounded-circle border-0 bg-secondary text-white" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card bg-primary d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="{{ asset('theme/img/undraw_rocket.svg') }}" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components,
                    and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to
                    Pro!</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    {{-- npm run --}}

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-dark font-weight-bold">{{ auth()->user()->name
                                    }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('theme/img/undraw_profile.svg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/home">
                                    <i class="fa-solid fa-arrows-rotate fa-sm fa-fw mr-2"></i>
                                    Muat Ulang
                                </a>
                                <div class="dropdown-divider"></div>
                                {{-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    --}}
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item" href="#"><i
                                                class="ml-1 mr-2 fas fa-sign-out-alt"></i> Logout</button>
                                    </form>
                                    {{--
                                </a> --}}
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white mt-5">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SIAKAD 2024</span>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('theme/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('theme/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('theme/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('theme/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('theme/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('theme/js/demo/chart-pie-demo.js') }}"></script>
    @livewireScripts
</body>

</html>