@extends('layoutbootstrap')

@section('konten')

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
              <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">Download Free</a>
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
                    <a href="{{url('logout')}}" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Data Pelanggan</h5>

                <!-- Display Error jika ada error -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- Akhir Display Error -->

                <!-- Awal Dari Input Form -->
                <form action="{{ route('pelanggan.store') }}" method="post">
                    @csrf
                    <fieldset disabled>
                        <div class="mb-3"><label for="kodepelangganlabel">Kode Pelanggan</label>
                        <input class="form-control form-control-solid" id="kode_pelanggan_tampil" name="kode_pelanggan_tampil" type="text" placeholder="Contoh: PL-001" value="{{$kode_pelanggan}}" readonly></div>
                    </fieldset>
                    <input type="hidden" id="kode_pelanggan" name="kode_pelanggan" value="{{$kode_pelanggan}}">

                    <div class="mb-3"><label for="namapelangganlabel">Nama Pelanggan</label>
                    <input class="form-control form-control-solid" id="nama_pelanggan" name="nama_pelanggan" type="text" placeholder="Contoh: Nama Pelanggan 1" value="{{old('nama_pelanggan')}}">
                    </div>
                    
                    <div class="mb-3"><label for="notlppelangganlabel">No Telepon Pelanggan</label>
                    <input class="form-control form-control-solid" id="no_tlp_pelanggan" name="no_tlp_pelanggan" type="text" placeholder="Contoh: 08xxxxxxxxxx" value="{{old('no_tlp_pelanggan')}}">
                    </div>
        
                    <div class="mb-0"><label for="alamatpelangganlabel">Alamat Pelanggan</label>
                        <textarea class="form-control form-control-solid" id="alamat_pelanggan" name="alamat_pelanggan" rows="3" placeholder="Contoh: Jl PGA 18">{{old('alamat_pelanggan')}}</textarea>
                    </div>

                    <div class="form-group"><label for="jeniskelaminpelangganlabel">Jenis Kelamin Pelanggan</label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" id="jenis_kelamin_pelanggan" name="jenis_kelamin_pelanggan" value="Perempuan"> Perempuan</label>
                        
                        <label class="radio-inline">
                        <input type="radio" id="jenis_kelamin_pelanggan" name="jenis_kelamin_pelanggan" value="Laki-laki"> Laki-laki</label>
                    </div>
                    <br>
                    <!-- untuk tombol simpan -->
                    
                    <input class="col-sm-1 btn btn-success btn-sm" type="submit" value="Simpan">

                    <!-- untuk tombol batal simpan -->
                    <a class="col-sm-1 btn btn-dark  btn-sm" href="{{ url('/pelanggan') }}" role="button">Batal</a>
                    
                </form>
                <!-- Akhir Dari Input Form -->
            
          </div>
        </div>
      </div>
		
		
		
        
@endsection