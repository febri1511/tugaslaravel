@extends('admin.layout.app')
{{-- orang tua dari setiap halaman --}}


{{-- extends itu tulisan atau perintah agar kita dapat menggunakan semua kode yang ada di dalam file tersebut --}}

{{-- halaman dashboard adalah anak dari si parent --}}

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Produk</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <a href="{{ url('admin/produk/create') }}" class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Harga Jual</th>
                            <th>Harga Beli</th>
                            <th>Stok</th>
                            <th>Minimal Stok</th>
                            <th>Deskripsi</th>
                            <th>Kategori Produk</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        {{-- karena data yg ditampilkan dalam produk controller adalah data array, maka untuk memanggil data array kita menggunakan foreach --}}
                        @foreach ($produk as $prod)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $prod->kode }}</td>
                                <td>{{ $prod->nama }}</td>
                                <td>{{ $prod->harga_jual }}</td>
                                <td>{{ $prod->harga_beli }}</td>
                                <td>{{ $prod->stok }}</td>
                                <td>{{ $prod->min_stok }}</td>
                                <td>{{ $prod->deskripsi }}</td>
                                <td>{{ $prod->nama_kategori }}</td>
                                <td>
                                    <a href="{{ url('admin/produk/edit/' . $prod->id) }}" class="btn btn-success">Edit</a>

                                    <a href="{{ url('admin/produk/delete/' . $prod->id) }}"
                                        class="btn btn-danger">Delete</a>
                                </td>

                            </tr>
                            @php
                                $no++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
