<x-app-layout>
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Tambah Data Bahan Baku</h5>

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
                <form action="{{ route('bahanbaku.store') }}" method="post">
                    @csrf
                    <fieldset disabled>
                        <div class="mb-3"><label for="kodebahanbakulabel">Kode Bahan Baku</label>
                        <input class="form-control form-control-solid" id="kode_bahanbaku_tampil" name="kode_bahanbaku_tampil" type="text" placeholder="Contoh: BB-001" value="{{$kode_bahanbaku}}" readonly></div>
                    </fieldset>
                    <input type="hidden" id="kode_bahanbaku" name="kode_bahanbaku" value="{{$kode_bahanbaku}}">

                    <div class="mb-3"><label for="namabahanbakulabel">Nama Bahan Baku</label>
                    <input class="form-control form-control-solid" id="nama_bahanbaku" name="nama_bahanbaku" type="text" placeholder="Contoh: Susu" value="{{old('nama_bahanbaku')}}">
                    </div>
                    
        
                    <div class="form-group"><label for="jenisbahanbakulabel">Jenis Baku</label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" id="jenis_bahanbaku" name="jenis_bahanbaku" value="Makanan"> Makanan</label>
                        
                        <label class="radio-inline">
                        <input type="radio" id="jenis_bahanbaku" name="jenis_bahanbaku" value="Minuman"> Minuman</label>
                    </div>
                    <br>
                    
                    <div class="mb-3"><label for="hargasatuanlabel">Harga Satuan</label>
                    <input class="form-control form-control-solid" id="harga_satuan" name="harga_satuan" type="text" placeholder="Contoh: 25000" value="{{old('harga_satuan')}}">
                    </div>

                    <div class="mb-3"><label for="kuantitaslabel">Kuantitas</label>
                    <input class="form-control form-control-solid" id="kuantitas" name="kuantitas" type="text" placeholder="Contoh: 10" value="{{old('kuantitas')}}">
                    </div>
                    <br>
                    <!-- untuk tombol simpan -->
                    
                    <button class="btn btn-success btn-sm" value="Simpan">Simpan</button>
        
                    <!-- untuk tombol batal simpan -->
                    <a class="btn btn-dark  btn-sm" href="{{ url('/bahanbaku') }}" role="button">Batal</a>
                    
                </form>
                <!-- Akhir Dari Input Form -->
            
          </div>
        </div>
      </div>
		
		
		
        
</x-app-layout>