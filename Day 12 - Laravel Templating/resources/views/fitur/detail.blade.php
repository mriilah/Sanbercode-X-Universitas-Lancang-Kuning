@extends('layout.master')
@section('title')
    Tambah Data
@endsection

@section('content')
<div class="new">
    <a href="/cast" class="button1 btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Kembali</a>
</div></br>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th style="text-align:center; width:20% ">
            Nama
        </th>
        <th style="text-align:center; width:10% ">
            Umur
        </th>
        <th style="text-align:center; width:40% ">
            Bio
        </th>
      </tr>
    </thead>
    <tbody>
            <tr>
                <td style="font-weight: bold; text-align:center; ">{{ $cast->nama }}</td>
                <td style="font-weight: bold; text-align:center; ">{{ $cast->umur }}</td>
                <td style="font-weight: bold; text-align:center; ">{{ $cast->bio }}</td>
            </tr>
    </tbody>
</table>
@endsection