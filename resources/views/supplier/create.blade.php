<x-app-layout>
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Tambah Data Supplier</h5>

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
                <form action="{{ route('supplier.store') }}" method="post">
                    @csrf
                    <fieldset disabled>
                        <div class="mb-3"><label for="kodesupplierlabel">Kode Supplier</label>
                        <input class="form-control form-control-solid" id="kode_supplier_tampil" name="kode_supplier_tampil" type="text" placeholder="Contoh: PR-001" value="{{$kode_supplier}}" readonly></div>
                    </fieldset>
                    <input type="hidden" id="kode_supplier" name="kode_supplier" value="{{$kode_supplier}}">

                    <div class="mb-3"><label for="namasupplierlabel">Nama Supplier</label>
                    <input class="form-control form-control-solid" id="nama_supplier" name="nama_supplier" type="text" placeholder="Contoh: Supplier Susu" value="{{old('nama_supplier')}}">
                    </div>
                    
        
                    <div class="mb-0"><label for="alamatsupplierlabel">Alamat Supplier</label>
                        <textarea class="form-control form-control-solid" id="alamat_supplier" name="alamat_supplier" rows="3" placeholder="Cth: Jl. Bojongsoang">{{old('alamat_supplier')}}</textarea>
                    </div>

                    <div class="mb-3"><label for="notelpsupplierlabel">No Telepon Supplier</label>
                    <input class="form-control form-control-solid" id="no_telp_supplier" name="no_telp_supplier" type="text" placeholder="Contoh: 08xxxxxxxxxx" value="{{old('no_telp_supplier')}}">
                    </div>

                    <div class="mb-3"><label for="namacpsupplierlabel">Nama Contact Person Supplier</label>
                    <input class="form-control form-control-solid" id="nama_cp_supplier" name="nama_cp_supplier" type="text" placeholder="Contoh: Susanto" value="{{old('nama_cp_supplier')}}">
                    </div>
                    <br>
                    <!-- untuk tombol simpan -->
                    
                    <button class="col-sm-1 btn btn-success btn-sm" value="Simpan">Simpan</button>

                    <!-- untuk tombol batal simpan -->
                    <a class="col-sm-1 btn btn-dark  btn-sm" href="{{ url('/supplier') }}" role="button">Batal</a>
                    
                </form>
                <!-- Akhir Dari Input Form -->
            
          </div>
        </div>
      </div>
		
		
		
        
</x-app-layout>