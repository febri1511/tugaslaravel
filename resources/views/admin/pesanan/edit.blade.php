@extends('admin.layout.app')
{{-- orang tua dari setiap halaman --}}

{{-- extends itu tulisan atau perintah agar kita dapat menggunakan semua kode yang ada di dalam file tersebut --}}

{{-- halaman dashboard adalah anak dari si parent --}}

@section('content')
    @foreach ($pesanan as $pes)
        <h1 style="text-align: center">Edit Pesanan</h1>
        <hr>
        <form method="POST" action="{{ url('admin/pesanan/update/' . $pes->id) }}">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                <div class="col-8">
                    <input id="tanggal" name="tanggal" type="date" value="{{ $pes->tanggal }}" class="form-control"
                        spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_pemesan" class="col-4 col-form-label">Nama Pemesan</label>
                <div class="col-8">
                    <input id="nama_pemesan" name="nama_pemesan" type="text" value="{{ $pes->nama_pemesan }}"
                        class="form-control" spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat_pemesan" class="col-4 col-form-label">Alamat Pemesan</label>
                <div class="col-8">
                    <input id="alamat_pemesan" name="alamat_pemesan" value="{{ $pes->alamat_pemesan }}" type="text"
                        class="form-control" spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="no_hp" class="col-4 col-form-label">No HP</label>
                <div class="col-8">
                    <input id="no_hp" name="no_hp" type="tel" class="form-control" spellcheck="false"
                        value="{{ $pes->no_hp }}" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">E-Mail</label>
                <div class="col-8">
                    <input id="email" name="email" type="text" class="form-control" spellcheck="false"
                        value="{{ $pes->email }}" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label>
                <div class="col-8">
                    <input id="jumlah_pesanan" name="jumlah_pesanan" type="number" min="0" class="form-control"
                        value="{{ $pes->jumlah_pesanan }}" spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                <div class="col-8">
                    <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control" spellcheck="false"
                        data-ms-editor="true">{{ $pes->deskripsi }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="produk_id" class="col-4 col-form-label">Nama Produk</label>
                <div class="col-8">
                    <select id="produk_id" name="produk_id" class="custom-select">
                        @foreach ($produk as $katprod)
                            <option value="{{ $katprod->id }}">{{ $katprod->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-success">Simpan Edit</button>
                </div>

            </div>
        </form>
    @endforeach
@endsection
