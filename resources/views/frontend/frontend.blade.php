@extends('layouts.app')
@section('content')
    <h3 style="text-align: center">
        Hallo {{ Auth::user()->name }}
    </h3>
    <h2>Selamat datang di dashboard frontend</h2>
@endsection
