<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = new Pesanan();

        return view('admin.produk.pesanan', ['pesanan' => $pesanan->getALLData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan sluruh data kategori produk
        $kategori_produk = KategoriProduk::all();
        // $pesanan = DB::table('produk')->get();
        // menampilkan seluruh data produk
        $pesanan = Pesanan::all();
        return view('admin.pesanan.create', compact('kategori_produk','pesanan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // buat class dengan nama table yang mau kita tambahkan datanya (produk)
        $pesanan = new Pesanan();

        // ambil data yang diinoutkan user dengan parameter request,
        // lalu masukan ke dalam kolom table (produk)
        $pesanan->tanggal = $request->tanggal;
        $pesanan->nama_pemesan = $request->nama_pemesan;
        $pesanan->alamat_pemesan = $request->alamat_pemesan;
        $pesanan->no_hp = $request->no_hp;
        $pesanan->email = $request->email;
        $pesanan->jumlah_pesanan = $request->jumlah_pesanan;
        $pesanan->deskripsi= $request->deskripsi;
        $pesanan->produk_id = $request->produk_id;

        // save data inputan user menggunakan method save
        $pesanan->save();

        // lalu kembalikan ke tampilan produk setelah user mengklik tombol simpan
        return redirect('admin/pesanan');
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
        $produk = DB::table('produk')->get();
        $pesanan = DB::table('pesanan')->where('id', $id)->get();
        return view('admin/pesanan/edit', compact('pesanan','kategori_produk','produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $pesanan = Pesanan::find($request->id);
        $pesanan->tanggal = $request->tanggal;
        $pesanan->nama_pemesan = $request->nama_pemesan;
        $pesanan->alamat_pemesan = $request->alamat_pemesan;
        $pesanan->no_hp = $request->no_hp;
        $pesanan->email = $request->email;
        $pesanan->jumlah_pesanan = $request->jumlah_pesanan;
        $pesanan->deskripsi= $request->deskripsi;
        $pesanan->produk_id = $request->produk_id;
        $pesanan->save();
        return redirect('admin/pesanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('pesanan')->where('id', $id)->delete();
        return redirect('admin/pesanan');
    }
}
