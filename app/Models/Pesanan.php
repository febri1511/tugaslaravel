<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;



class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';

    protected $primarykey = 'id';

    protected $fillable = [
        'tanggal',
        'nama_pemesan',
        'alamat_pemesan',
        'no_hp',
        'email',
        'jumlah_pesanan',
        'deskripsi',
        'produk_id'
    ];

    // ini fungsi untuk menghubungkan ke model produk
    public function produk(){
        return $this->belongTo(Produk::class);
    }

    public function getALLData(){
        $alldata = DB::table('pesanan')
        ->join('produk', 'pesanan.produk_id', '=', 'produk.id')
        ->select('pesanan.*', 'produk.nama as nama_produk')
        ->get();
        return $alldata;
    }
}
