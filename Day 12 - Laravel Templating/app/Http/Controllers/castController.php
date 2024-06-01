<?php

namespace App\Http\Controllers;
use App\Models\Cast;
use Illuminate\Http\Request;

class castController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cast = Cast::all();
        

        return view('fitur.tampil', ['cast' => $cast]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fitur.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'umur' => 'required',
            'bio' => 'required|min:15',
        ],
        [
            'nama' => 'Nama harus diisi',
            'umur' => 'Umur harus diisi',
            'bio' => 'Bio harus diisi',
        ]);
        $cast = new Cast;
 
        $cast->nama = $request->input('nama');
        $cast->umur = $request->input('umur');
        $cast->bio = $request->input('bio');
 
        $cast->save();

        return redirect('/cast');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cast = Cast::find($id);

        return view('fitur.detail', ['cast' => $cast]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cast = Cast::find($id);

        return view('fitur.edit', ['cast' => $cast]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'umur' => 'required',
            'bio' => 'required|min:15',
        ],
        [
            'nama' => 'Nama harus diisi',
            'umur' => 'Umur harus diisi',
            'bio' => 'Bio harus diisi',
        ]);

        Cast::where('id', $id)
            ->update([
                    'nama' => $request->input('nama'),
                    'umur' => $request->input('umur'),
                    'bio' => $request->input('bio'),
            ]);

        return redirect('/cast');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cast::where('id', $id)->delete();

        return redirect('/cast');
    }
}
