@extends('admin.layout.app')
@section('content')
    @foreach ($Kategori_Produk as $katprod)
        <form method="POST" action="{{ url('admin/KategoriProduk/update/' . $katprod->id) }}">
            {{ csrf_field() }}
            <h4 style="text-align: center">Form Edit Data</h4>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" value="{{ $katprod->nama }}" type="text" class="form-control"
                        spellcheck="false" data-ms-editor="true">
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Simpan Edit</button>
                </div>
                
            </div>
        </form>
    @endforeach
@endsection
