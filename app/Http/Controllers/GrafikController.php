<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Grafik;

class GrafikController extends Controller
{
    // view bulan berjalan
    public function viewPenjualanBlnBerjalan(){
        $grafik = Grafik::viewBulanBerjalan();
        return view('grafik.bulanberjalan',
                        [
                            'grafik' => $grafik
                        ]
                    );
    }

    // view status penjualan
    public function viewJmlPenjualan(){
        $grafik = Grafik::viewJmlPenjualan();
        return view('grafik.jmlpenjualan',
                        [
                            'grafik' => $grafik
                        ]
                    );
    }

    // view jml barang terjual
    public function viewJmlBarangTerjual(){
        $grafik = Grafik::viewJmlBarangTerjual();
        return view('grafik.bulanberjalanperbarang',
                        [
                            'grafik' => $grafik
                        ]
                    );
    }
}
