<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;
use Illuminate\Support\Facades\File;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembeli = Pembeli::all();
        // cara manggilnya = folder.file
        return view('pembeli.index', compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_pembeli'   => 'required|string|max:50',
            'jenis_kelamin'   => 'required|string|max:50',
            'telepon'   => 'required|string|max:50',
            // 'cover'   => 'required|images', 

        ],
        [
            'name_pembeli.required' => 'name_pembeli tidak boleh kosong',
            'jenis_kelamin.required' => 'jenis_kelamin tidak boleh kosong',
            'telepon.required' => 'telepon tidak boleh kosong',
            // 'cover.required' => 'Cover tidak boleh kosong',
        ]);

        $pembeli          = new Pembeli;
        $pembeli->name_pembeli   = $request->name_pembeli;
        $pembeli->jenis_kelamin   = $request->jenis_kelamin;
        $pembeli->telepon   = $request->telepon;

        $pembeli->save();

        session()->flash('success','Data berhasil ditambahkan');

        return redirect()->route('pembeli.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pembeli= Pembeli::findOrFail($id);
        return view('pembeli.show', compact('pembeli'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('pembeli.edit', compact('pembeli'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pembeli = Pembeli::findOrFail($id);
        $pembeli->name_pembeli   = $request->name_pembeli;
        $pembeli->jenis_kelamin   = $request->jenis_kelamin;
        $pembeli->telepon   = $request->telepon;

        $pembeli->save();

        session()->flash('success','Data berhasil dirubah');

        return redirect()->route('pembeli.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembeli = Pembeli::findOrFail($id);

        $pembeli->delete();
        return redirect()->route('pembeli.index')->with('success','Data berhasil dihapus');
    }
}
