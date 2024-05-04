<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Http\Requests\StorePenjualanRequest;
use App\Http\Requests\UpdatePenjualanRequest;

// untuk validator
use Illuminate\Support\Facades\Validator; 
use Illuminate\Support\Facades\Auth; //untuk mendapatkan auth

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public static function index()
    {
        // getViewBarang()
        $barang = Penjualan::getBarang();
        $id_customer = Auth::id(); //dapatkan id customer dari sesi user
        return view('penjualan.view',
                [
                    'barang' => $barang,
                    'jml' => Penjualan::getJmlBarang($id_customer),
                    'jml_invoice' => Penjualan::getJmlInvoice($id_customer),
                ]
        );
    }

    // dapatkan data barang berdasarkan id barang
    public static function getDataBarang($id){
        $barang = Penjualan::getBarangId($id);
        if($barang)
        {
            return response()->json([
                'status'=>200,
                'barang'=> $barang,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'Tidak ada data ditemukan.'
            ]);
        }
    }

    // dapatkan data barang berdasarkan id barang
    public static function getDataBarangAll(){
        $barang = Penjualan::getBarang();
        if($barang)
        {
            return response()->json([
                'status'=>200,
                'barang'=> $barang,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'Tidak ada data ditemukan.'
            ]);
        }
    }

    // dapatkan jumlah barang untuk keranjang
    public static function getJumlahBarang(){
        $id_customer = Auth::id();
        $jml_barang = Penjualan::getJmlBarang($id_customer);
        if($jml_barang)
        {
            return response()->json([
                'status'=>200,
                'jumlah'=> $jml_barang,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'Tidak ada data ditemukan.'
            ]);
        }
    }

    // dapatkan jumlah barang untuk keranjang
    public static function getInvoice(){
        $id_customer = Auth::id();
        $jml_barang = Penjualan::getJmlInvoice($id_customer);
        if($jml_barang)
        {
            return response()->json([
                'status'=>200,
                'jmlinvoice'=> $jml_barang,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'Tidak ada data ditemukan.'
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePenjualanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public static function store(StorePenjualanRequest $request)
    {
        //digunakan untuk validasi kemudian kalau ok tidak ada masalah baru disimpan ke db
        $validator = Validator::make(
            $request->all(),
            [
                'jumlah' => 'required',
            ]
        );
        
        if($validator->fails()){
            // gagal
            return response()->json(
                [
                    'status' => 400,
                    'errors' => $validator->messages(),
                ]
            );
        }else{
            // berhasil

            // cek apakah tipenya input atau update
            // input => tipeproses isinya adalah tambah
            // update => tipeproses isinya adalah ubah
            
            if($request->input('tipeproses')=='tambah'){

                $id_customer = Auth::id();
                $jml_barang = $request->input('jumlah');
                $id_barang = $request->input('idbaranghidden');

                $brg = Penjualan::getBarangId($id_barang);
                foreach($brg as $b):
                    $harga_barang = $b->harga;
                endforeach;

                $total_harga = $harga_barang*$jml_barang;
                Penjualan::inputPenjualan($id_customer,$total_harga,$id_barang,$jml_barang,$harga_barang,$total_harga);

                return response()->json(
                    [
                        'status' => 200,
                        'message' => 'Sukses Input Data',
                    ]
                );
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public static function show(Penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public static function edit(Penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePenjualanRequest  $request
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public static function update(UpdatePenjualanRequest $request, Penjualan $penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public static function destroy(Penjualan $penjualan)
    {
        //
    }

    // view keranjang
    public static function keranjang(){
        $id_customer = Auth::id();
        $keranjang = Penjualan::viewKeranjang($id_customer);
        return view('penjualan/viewkeranjang',
                [
                    'keranjang' => $keranjang
                ]
        );
    }

    // view status
    public static function viewstatus(){
        $id_customer = Auth::id();
        // dapatkan id ke berapa dari status pemesanan
        $id_status_pemesanan = Penjualan::getIdStatus($id_customer);
        $status_pemesanan = Penjualan::getStatusAll($id_customer);
        return view('penjualan.viewstatus',
                [
                    'status_pemesanan' => $status_pemesanan,
                    'id_status_pemesanan'=> $id_status_pemesanan
                ]
        );
    } 

    // view keranjang
    public static function keranjangjson(){
        $id_customer = Auth::id();
        $keranjang = Penjualan::viewKeranjang($id_customer);
        if($keranjang)
        {
            return response()->json([
                'status'=>200,
                'keranjang'=> $keranjang,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'Tidak ada data ditemukan.'
            ]);
        }
    }

    // view keranjang
    public static function checkout(){
        $id_customer = Auth::id();
        Penjualan::checkout($id_customer); //proses cekout
        $barang = Penjualan::getBarang();

        return redirect('penjualan/status');
    }

    // invoice
    public static function invoice(){
        $id_customer = Auth::id();
        $invoice = Penjualan::getListInvoice($id_customer);
        if($invoice)
        {
            return response()->json([
                'status'=>200,
                'invoice'=> $invoice,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'Tidak ada data ditemukan.'
            ]);
        }
    }

    // delete penjualan detail
    public static function destroypenjualandetail($id_penjualan_detail){
        // kembalikan stok ke semula
        Penjualan::kembalikanstok($id_penjualan_detail);

        //hapus dari database
        Penjualan::hapuspenjualandetail($id_penjualan_detail);

        $id_customer = Auth::id();
        $keranjang = Penjualan::viewKeranjang($id_customer);

        return view('penjualan/viewkeranjang',
            [
                'keranjang' => $keranjang,
                'status_hapus' => 'Sukses Hapus'
            ]
        );
    }
}
