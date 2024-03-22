<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bahanbaku extends Model
{
    use HasFactory;
    protected $table = 'bahanbaku';
    protected $fillable = ['kode_bahanbaku','nama_bahanbaku','jenis_bahanbaku','harga_satuan','kuantitas'];

    public static function getKodeBahanbaku()
    {
        // query kode bahanbaku
        $sql = "SELECT IFNULL(MAX(kode_bahanbaku), 'SP-000') as kode_bahanbaku 
                FROM bahanbaku";
        $kodebahanbaku = DB::select($sql);

        // cacah hasilnya
        foreach ($kodebahanbaku as $kdsplr) {
            $kd = $kdsplr->kode_bahanbaku;
        }
        // Mengambil substring tiga digit akhir dari string PR-000
        $noawal = substr($kd,-3);
        $noakhir = $noawal+1; //menambahkan 1, hasilnya adalah integer cth 1
        
        //menyambung dengan string PR-001
        $noakhir = 'SP-'.str_pad($noakhir,3,"0",STR_PAD_LEFT); 

        return $noakhir;

    }
}