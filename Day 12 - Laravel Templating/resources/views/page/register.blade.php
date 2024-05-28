@extends('layout.master')
@section('title')
    Daftar dulu
@endsection

@section('content')
    <h1>Buat Acoount Baru</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        @csrf
        <label for="">First Name :</label><br>
        <input type="text" name="namadepan" id=""><br>
        <label for="">Last Name :</label><br>
        <input type="text" name="namabelakang" id=""><br>
        <br>
        <label for="">Nationality :</label><br>
        <select name="Kebangsaan" id="bangsa">
            <option value="indonesia" id="dariindo">indonesia</option>
            <option value="Belanda" id="daribelanda">Belanda</option>
            <option value="Malaysia" id="darimalay">Malaysia</option>
        </select><br><br>
        <button type="submit">Sign Up</button>
    </form><br>
    <a href="/">Kembali</a>
@endsection