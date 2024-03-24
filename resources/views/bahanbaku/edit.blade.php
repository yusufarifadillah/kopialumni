<x-app-layout>
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Ubah Data Bahan Baku</h5>

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
                <form action="{{ route('bahanbaku.update', $bahanbaku->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <fieldset disabled>
                        <div class="mb-3"><label for="kodebahanbakulabel">Kode Bahan Baku</label>
                        <input class="form-control form-control-solid" id="kode_bahanbaku_tampil" name="kode_bahanbaku_tampil" type="text" placeholder="Contoh: BB-001" value="{{$bahanbaku->kode_bahanbaku}}" readonly></div>
                    </fieldset>
                    <input type="hidden" id="kode_bahanbaku" name="kode_bahanbaku" value="{{$bahanbaku->kode_bahanbaku}}">

                    <div class="mb-3"><label for="namabahanbakulabel">Nama Bahan Baku</label>
                    <input class="form-control form-control-solid" id="nama_bahanbaku" name="nama_bahanbaku" type="text" placeholder="Contoh: Susu" value="{{$bahanbaku->nama_bahanbaku}}">
                    </div>
                    
        
                    <div class="form-group"><label for="jenisbahanbakulabel">Jenis Bahan Baku</label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" id="jenis_bahan_baku" name="jenis_bahanbaku" value="Perempuan" {{$bahanbaku->jenis_bahanbaku == "Makanan" ? "checked" : ""}}>Makanan</label>
                        
                        <label class="radio-inline">
                        <input type="radio" id="jenis_bahan_baku" name="jenis_bahanbaku" value="Laki-laki" {{$bahanbaku->jenis_bahanbaku == "Minuman" ? "checked" : ""}}>Minuman</label>
                    </div>

                    <div class="mb-3"><label for="hargasatuanlabel">Harga Satuan</label>
                    <input class="form-control form-control-solid" id="harga_satuan" name="harga_satuan" type="text" placeholder="Contoh: 25000" value="{{$bahanbaku->harga_satuan}}">
                    </div>

                    <div class="mb-3"><label for="kuantitaslabel">Kuantitas</label>
                    <input class="form-control form-control-solid" id="kuantitas" name="kuantitas" type="text" placeholder="Contoh: 10" value="{{$bahanbaku->kuantitas}}">
                    </div>
                    <br>
                    <!-- untuk tombol simpan -->
                    
                    <button class="col-sm-1 btn btn-success btn-sm" value="Ubah">Ubah</button>

                    <!-- untuk tombol batal simpan -->
                    <a class="col-sm-1 btn btn-dark  btn-sm" href="{{ url('/bahanbaku') }}" role="button">Batal</a>
                    
                </form>
                <!-- Akhir Dari Input Form -->
            
          </div>
        </div>
      </div>
		
		
		
        
</x-app-layout>