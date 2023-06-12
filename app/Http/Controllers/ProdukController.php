<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = new Produk();
        return view('admin.produk.produk', ['produk' => $produk->getALLData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan sluruh data kategori produk
        $kategori_produk = KategoriProduk::all();

        // menampilkan seluruh data produk
        $produk = Produk::all();
        return view('admin.produk.create', compact('kategori_produk', 'produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // buat class dengan nama table yang mau kita tambahkan datanya (produk)
        $produk = new Produk();

        // ambil data yang diinoutkan user dengan parameter request,
          // lalu masukan ke dalam kolom table (produk)
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi= $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;

        // save data inputan user menggunakan method save
        $produk->save();

        // lalu kembalikan ke tampilan produk setelah user mengklik tombol simpan
        return redirect('admin/produk');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori_produk = DB::table('kategori_produk')->get();
        $produk = DB::table('produk')->where('id', $id)->get();
        return view('admin/produk/edit', compact('produk','kategori_produk'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // buat class dengan nama table yang mau kita tambahkan datanya (produk)
        $produk = Produk::find($request->id);
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi= $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('admin/produk');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //buka table produk
        //cari data yang ingin dihapus berdasarkan id nya
        //hapus data menggunakan method delete()
        DB::table('produk')->where('id', $id)->delete();
        return redirect('admin/produk');

    }
}