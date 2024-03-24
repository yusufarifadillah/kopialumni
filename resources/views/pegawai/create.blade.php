<x-app-layout>
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Tambah Data Pegawai</h5>

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
                <form action="{{ route('pegawai.store') }}" method="post">
                    @csrf
                    <fieldset disabled>
                        <div class="mb-3"><label for="kodepegawailabel">Kode Pegawai</label>
                        <input class="form-control form-control-solid" id="kode_pegawai_tampil" name="kode_pegawai_tampil" type="text" placeholder="Contoh: PG-001" value="{{$kode_pegawai}}" readonly></div>
                    </fieldset>
                    <input type="hidden" id="kode_pegawai" name="kode_pegawai" value="{{$kode_pegawai}}">

                    <div class="mb-3"><label for="namapegawailabel">Nama Pegawai</label>
                    <input class="form-control form-control-solid" id="nama_pegawai" name="nama_pegawai" type="text" placeholder="Contoh: Lee Jeno" value="{{old('nama_pegawai')}}">
                    </div>
                    
                    <div class="mb-0"><label for="notelppegawailabel">No Telepon Pegawai</label>
                    <input class="form-control form-control-solid" id="no_telp_pegawai" name="no_telp_pegawai" rows="3" placeholder="Contoh: 08xxxxxxxxxx" value="{{old('no_telp_pegawai')}}">
                    </div>

                    <div class="mb-0"><label for="posisipegawailabel">Posisi Pegawai</label>
                    <input class="form-control form-control-solid" id="posisi_pegawai" name="posisi_pegawai" rows="3" placeholder="Contoh: Kasir" value="{{old('posisi_pegawai')}}">
                    </div>

                    <div class="mb-0"><label for="jeniskelaminpegawai">Jenis Kelamin</label>
                    <br>
                    <input class="form-check-input" type="radio" name="jenis_kelamin_pegawai" id="perempuan" value="Perempuan">
                    <label class="form-check-label" for="Perempuan">
                      Perempuan
                    </label>
                    <input class="form-check-input" type="radio" name="jenis_kelamin_pegawai" id="laki-laki" value="Laki-laki">
                    <label class="form-check-label" for="Laki-laki">
                      Laki-laki
                    </label>
                    </div>
                    <br>
                    <!-- untuk tombol simpan -->
                    
                    <button class="col-sm-1 btn btn-success btn-sm" value="Simpan">Simpan</button>

                    <!-- untuk tombol batal simpan -->
                    <a class="col-sm-1 btn btn-dark  btn-sm" href="{{ url('/pegawai') }}" role="button">Batal</a>
                    
                </form>
                <!-- Akhir Dari Input Form -->
            
          </div>
        </div>
      </div>
		
		
		
        
</x-app-layout>