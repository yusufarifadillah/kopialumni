<x-app-layout>
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Tambah Data Menu</h5>

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
                <form action="{{ route('menu.store') }}" method="post">
                    @csrf
                    <fieldset disabled>
                        <div class="mb-3"><label for="kodemenulabel">Kode Menu</label>
                        <input class="form-control form-control-solid" id="kode_menu_tampil" name="kode_menu_tampil" type="text" placeholder="Contoh: MN-001" value="{{$kode_menu}}" readonly></div>
                    </fieldset>
                    <input type="hidden" id="kode_menu" name="kode_menu" value="{{$kode_menu}}">

                    <div class="mb-3"><label for="jenislabel">Jenis</label>
                    <select class="form-control select2" id="jenis" name="jenis" type="select2" value="{{old('jenis')}}">
                      <option value ="Makanan"> Makanan</option>
                      <option value ="Minuman"> Minuman</option>
                    </select>
                    </div>

                    <div class="mb-3"><label for="namalabel">Nama</label>
                    <input class="form-control form-control-solid" id="nama" name="nama" type="text" placeholder="Contoh: Thai Tea" value="{{old('nama')}}">
                    </div>
                    <div class="col-6">
        
                    <div class="mb-0"><label for="hargalabel">Harga</label>
                    <input class="form-control form-control-solid" id="harga" name="harga" rows="3" placeholder="Contoh: 10000" value="{{old('harga')}}">
                    </div>
                    <br>
                   <!-- untuk tombol simpan -->
                    
                   <button class="col-sm-1 btn btn-success btn-sm" value="Simpan">Simpan</button>

                    <!-- untuk tombol batal simpan -->
                    <a class="col-sm-1 btn btn-dark  btn-sm" href="{{ url('/menu') }}" role="button">Batal</a>
                </form>
                <!-- Akhir Dari Input Form -->
            
          </div>
        </div>
      </div>
		
		
		
        
</x-app-layout>