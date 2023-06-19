@extends('admin.layout.app')
@section('content')
    <form method="POST" action="{{ url('admin/kategoriproduk/store') }}">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control" spellcheck="false"
                    data-ms-editor="true">
            </div>
        </div>

        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>
    </form>
@endsection
