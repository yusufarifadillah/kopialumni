<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'supplier';
    protected $fillable = ['kode_supplier','nama_supplier','alamat_supplier','no_telp_supplier','nama_cp_supplier'];

    public static function getKodeSupplier()
    {
        // query kode supplier
        $sql = "SELECT IFNULL(MAX(kode_supplier), 'SP-000') as kode_supplier 
                FROM supplier";
        $kodesupplier = DB::select($sql);

        // cacah hasilnya
        foreach ($kodesupplier as $kdsplr) {
            $kd = $kdsplr->kode_supplier;
        }
        // Mengambil substring tiga digit akhir dari string PR-000
        $noawal = substr($kd,-3);
        $noakhir = $noawal+1; //menambahkan 1, hasilnya adalah integer cth 1
        
        //menyambung dengan string PR-001
        $noakhir = 'SP-'.str_pad($noakhir,3,"0",STR_PAD_LEFT); 

        return $noakhir;

    }
}
