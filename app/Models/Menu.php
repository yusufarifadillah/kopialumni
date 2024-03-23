<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menu';
    // list kolom yang bisa diisi
    protected $fillable = ['kode_menu','makanan','minuman','harga'];

    // query nilai max dari kode menu untuk generate otomatis kode menu
    public static function getKodeMenu()
    {
        // query kode menu
        $sql = "SELECT IFNULL(MAX(kode_menu), 'MN-000') as kode_menu 
                FROM menu";
        $kodemenu = DB::select($sql);

        // cacah hasilnya
        foreach ($kodemenu as $kdmn) {
            $kd = $kdmn->kode_menu;
        }
        // Mengambil substring tiga digit akhir dari string MN-000
        $noawal = substr($kd,-3);
        $noakhir = $noawal+1; //menambahkan 1, hasilnya adalah integer cth 1
        
        //menyambung dengan string MN-001
        $noakhir = 'MN-'.str_pad($noakhir,3,"0",STR_PAD_LEFT); 

        return $noakhir;

    }
}
