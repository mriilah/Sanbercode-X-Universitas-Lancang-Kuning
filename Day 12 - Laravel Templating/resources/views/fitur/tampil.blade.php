@extends('layout.master')
@section('title')
    Tambah Data
@endsection

@section('content')
    <div class="new">
        <a href="/cast/create" class="button1 btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Tambah</a>
    </div></br>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th style="text-align:center; width:20% ">
                Nama
            </th>
            <th style="text-align:center; width:10% ">
                Umur
            </th>
            <th style="text-align:center; width:40% ">
                Bio
            </th>
            <th style="text-align:center; width:20% ">
                Aksi
            </th>
          </tr>
        </thead>
        <tbody>
            @forelse ($cast as $key =>  $item)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td style="font-weight: bold; text-align:center; ">{{ $item->nama }}</td>
                    <td style="font-weight: bold; text-align:center; ">{{ $item->umur }}</td>
                    <td style="font-weight: bold; text-align:center; ">{{ $item->bio }}</td>
                    <td style=" text-align:center; ">
                        
                        <form action="/cast/{{ $item->id }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                            <a href="/cast/{{ $item -> id }}" class="btn btn-sm btn-primary"><i class="fa-solid fa-list"></i></a>
                            <a href="/cast/{{ $item -> id }}/edit" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen"></i></a>
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger btn-sm"><i class="fa-solid fa-eraser"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Data tidak ada</td>
                </tr>
            @endforelse
        </tbody>
      </table>


@endsection