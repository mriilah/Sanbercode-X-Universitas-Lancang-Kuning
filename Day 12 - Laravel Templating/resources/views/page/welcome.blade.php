@extends('layout.master')
@section('title')
    Selamat Datang
@endsection

@section('content')
    <h1>Selamat Datang {{ $fistname }} {{ $lastname }}, Orang {{ $bangsa }} Cuyy</h1>
    <h3>Terimakasih Telah Bergabung di Sanberbook. Social Media Kita Bersama</h3><br>
    <a href="/">Kembali</a>
@endsection