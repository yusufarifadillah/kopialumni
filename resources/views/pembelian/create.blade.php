<x-app-layout>
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Data Pembelian</h5>

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
                <form action="{{ route('pembelian.store') }}" method="post">
                    @csrf
                    <fieldset disabled>
                        <div class="mb-3"><label for="nomor_pembelianlabel">Nomor Pembelian</label>
                        <input class="form-control form-control-solid" id="nomor_pembelian_tampil" name="nomor_pembelian_tampil" type="text" placeholder="Contoh: PB-001" value="{{$nomor_pembelian}}" readonly></div>
                    </fieldset>
                    <input type="hidden" id="nomor_pembelian" name="nomor_pembelian" value="{{$nomor_pembelian}}">

                    <div class="mb-3"><label for="tanggal_pembelian">Tanggal Pembelian</label>
                    <input class="form-control form-control-solid" id="tanggal_pembelian" name="tanggal_pembelian" type="date"  value="{{old('tanggal_pembelian')}}">
                    </div>

                    <div class="mb-3"><label for="kode_bahanbaku">Kode Bahan Baku</label>
                    <select name="kode_bahanbaku" id="kode_bahanbaku">
                      @foreach($bahanbaku as $b)
                      <option value="{{$b->kode_bahanbaku}}">{{$b->nama_bahanbaku}}</option>
                      @endforeach
                    </select>
                    </div>

                    <div class="mb-3"><label for="harga">Harga</label>
                      <input class="form-control form-control-solid" id="harga" name="harga" type="text"  value="{{old('harga')}}">
                      </div>

                      <div class="mb-3"><label for="kuantitas">Kuantitas</label>
                        <input class="form-control form-control-solid" id="kuantitas_tampil" name="kuantitas" type="text"  value="{{old('kuantitas')}}">
                        </div>
        
                    
                    <br>
                    <!-- untuk tombol simpan -->
                    
                    <input class="col-sm-1 btn btn-success btn-sm" type="submit" value="Simpan">

                    <!-- untuk tombol batal simpan -->
                    <a class="col-sm-1 btn btn-dark  btn-sm" href="{{ url('/pembelian') }}" role="button">Batal</a>
                    
                </form>
                <!-- Akhir Dari Input Form -->
            
          </div>
        </div>
      </div>



</x-app-layout>