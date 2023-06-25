<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk extends Model
{
    use HasFactory;

    // hubungin dengan tabel produk
    protected $table = 'produk';

    // matiin inputan timestamps
    public $timestamps = false;
    
    // tentuin kolom-kolom yang bisa diisi
    protected $fillable = [
        'kode',             // Kode produk
        'nama',             // Nama produk
        'harga_jual',       // Harga jual produk
        'harga_beli',       // Harga beli produk
        'stok',             // Jumlah stok produk
        'min_stok',         // Jumlah minimal stok produk
        'deskripsi',        // Deskripsi produk
        'kategori_produk_id', // ID kategori produk
    ];

    // Buat fungsi untuk relasi ke tabel kategori_produk
    public function kategori_produk()
    {
        return $this->belongsTo(KategoriProduk::class);
    }

    // Buat fungsi untuk nampilin data produk
    public static function getAllProduk()
    {
        // return DB::table('produk')->get();

        // Bikin Query nampilin nama kategori
        $alldata = DB::table('produk')
            ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
            ->select('produk.*', 'kategori_produk.nama as nama_kategori')
            ->get();

        return $alldata;
    }
}
