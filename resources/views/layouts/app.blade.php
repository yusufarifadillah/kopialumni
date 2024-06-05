<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kopi Alumni Cashier</title>
  <style>
    /* Optional: Custom CSS for DataTables */
    table.dataTable thead tr {
      background-color: LightGray;
    }
    table.dataTable tfoot tr {
      background-color: LightGray;
    }
  </style>
  <link rel="shortcut icon" type="image/png" href="{{asset('images/logos/favicon.png')}}" />
  <link rel="stylesheet" href="{{asset('css/styles.min.css')}}" />
  <!-- Untuk Tambahan DatacoaTables -->
  <link href="{{asset('libs/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>	

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('libs/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('libs/bootstrap-external/js/bootstrap.bundle.min.js')}}"></script>
  
  <!-- Untuk sweet alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Untuk select2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


  <!-- Tambahan form validation pop up -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- fancy box -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="{{asset('images/logos/dark-logo.svg')}}" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ url('berita1/galeri') }}" aria-expanded="false">
                                <span> 
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Berita 1</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ url('berita2/galeri') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Berita 2</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ url('berita3/galeri') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Berita 3</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Masterdata</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('menu.index')}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-menu-2"></i>
                                </span>
                                <span class="hide-menu">Menu</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('pegawai.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-user-circle"></i>
                                </span>
                                <span class="hide-menu">Pegawai</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('pelanggan.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-users"></i>
                                </span>
                                <span class="hide-menu">Pelanggan</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('supplier.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-truck"></i>
                                </span>
                                <span class="hide-menu">Supplier</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('bahanbaku.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-box"></i>
                                </span>
                                <span class="hide-menu">Bahan Baku</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                          <a class="sidebar-link" href="{{ url('coa') }}" aria-expanded="false">
                            <span>
                              <i class="ti ti-clipboard"></i>
                            </span>
                            <span class="hide-menu">Coa</span>
                          </a>
                        </li>

                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Transaksi</span>
                        </li>
                        <li class="sidebar-item">
                          <a class="sidebar-link" href="{{ url('pembelian') }}" aria-expanded="false">
                            <span>
                              <i class="ti ti-shopping-cart"></i>
                            </span>
                            <span class="hide-menu">Pembelian</span>
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a class="sidebar-link" href="{{ url('penjualan') }}" aria-expanded="false">
                            <span>
                              <i class="ti ti-shopping-cart"></i>
                            </span>
                            <span class="hide-menu">Penjualan</span>
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a class="sidebar-link" href="{{ url('pembayaran/viewkeranjang') }}" aria-expanded="false">
                            <span>
                              <i class="ti ti-credit-card"></i>
                            </span>
                            <span class="hide-menu">Pembayaran</span>
                          </a>
                        </li>

                        <li class="sidebar-item">
                          <a class="sidebar-link" href="{{ url('pembayaran/viewstatus') }}" aria-expanded="false">
                            <span>
                              <i class="ti ti-credit-card"></i>
                            </span>
                            <span class="hide-menu">Status Pembayaran</span>
                          </a>
                        </li>

                        <li class="sidebar-item">
                          <a class="sidebar-link" href="{{ url('pembayaran/viewapprovalstatus') }}" aria-expanded="false">
                            <span>
                              <i class="ti ti-credit-card"></i>
                            </span>
                            <span class="hide-menu">Approval Pembayaran</span>
                          </a>
                        </li>

                        <li class="sidebar-item">
                          <a class="sidebar-link" href="{{ url('midtrans') }}" aria-expanded="false">
                            <span>
                              <i class="ti ti-credit-card"></i>
                            </span>
                            <span class="hide-menu">Midtrans</span>
                          </a>
                        </li>

                        <li class="sidebar-item">
                          <a class="sidebar-link" href="{{ url('pembayaran/viewstatusPG') }}" aria-expanded="false">
                            <span>
                              <i class="ti ti-credit-card"></i>
                            </span>
                            <span class="hide-menu">View Status PG</span>
                          </a>
                        </li>

                        <li class="sidebar-item">
                          <a class="sidebar-link" href="{{ url('midtrans/bayar') }}" aria-expanded="false">
                            <span>
                              <i class="ti ti-credit-card"></i>
                            </span>
                            <span class="hide-menu">Pembayaran PG</span>
                          </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">LAPORAN</span>
                        </li>
                        <li class="sidebar-item">
                          <a class="sidebar-link" href="{{ url('jurnal/umum') }}" aria-expanded="false">
                            <span>
                              <i class="ti ti-files"></i>
                            </span>
                            <span class="hide-menu">Jurnal Umum</span>
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a class="sidebar-link" href="{{ url('jurnal/bukubesar') }}" aria-expanded="false">
                            <span>
                              <i class="ti ti-archive"></i>
                            </span>
                            <span class="hide-menu">Buku Besar</span>
                          </a>
                        </li>

                        

                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">GRAFIK</span>
                        </li>
                        <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ url('grafik/viewPenjualanBlnBerjalan') }}" aria-expanded="false">
                          <span>
                            <i class="ti ti-dashboard"></i>
                          </span>
                          <span class="hide-menu">Penjualan</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ url('grafik/viewJmlPenjualan') }}" aria-expanded="false">
                          <span>
                            <i class="ti ti-aperture"></i>
                          </span>
                          <span class="hide-menu">Barang</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ url('grafik/viewJmlBarangTerjual') }}" aria-expanded="false">
                          <span>
                            <i class="ti ti-package"></i>
                          </span>
                          <span class="hide-menu">Barang Per Bulan</span>
                        </a>
                      </li>


                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    @if(isset($status_hapus))
        <script>
            Swal.fire({
                title: 'Berhasil!',
                text: 'Hapus Data Berhasil',
                icon: 'success',
                confirmButtonText: 'Ok'
            });
        </script>
    @endif
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">Admin</a>
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="{{asset('images/profile/user-1.jpg')}}" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      {{ $slot }}
    </div>
  </div>
  <script src="{{asset('libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/sidebarmenu.js')}}"></script>
  <script src="{{asset('js/app.min.js')}}"></script>
  <script src="{{asset('libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{asset('libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{asset('js/dashboard.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('libs/jquery-easing/jquery.easing.min.js')}}"></script>


  <!-- Datatables plugin -->
  <script src="{{asset('libs/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('libs/datatables/dataTables.bootstrap4.min.js')}}"></script>

  

  <!-- fancy box -->
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
  <script>
    $(document).ready(function() {
        $('#dataTable').dataTable()
    })
  </script>
</body>

</html>