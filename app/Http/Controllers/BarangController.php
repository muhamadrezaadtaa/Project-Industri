<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\File;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        // cara manggilnya = folder.file
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_barang'   => 'required|string|max:50',
            'merek'   => 'required|string|max:50',
            'harga'   => 'required|string|max:50',
            'stok'   => 'required|integer|max:100',
            // 'cover'   => 'required|images', 

        ],
        [
            'name_barang.required' => 'name barang tidak boleh kosong',
            'merek.required' => 'merek tidak boleh kosong',
            'harga.required' => 'harga tidak boleh kosong',
            'stok.required' => 'stok tidak boleh kosong',
            // 'cover.required' => 'Cover tidak boleh kosong',
        ]);

        $barang          = new Barang;
        $barang->name_barang   = $request->name_barang;
        $barang->merek   = $request->merek;
        $barang->harga   = $request->harga;
        $barang->stok   = $request->stok;

        $barang->save();

        session()->flash('success','Data berhasil ditambahkan');

        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang= Barang::findOrFail($id);
        return view('barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->name_barang   = $request->name_barang;
        $barang->merek   = $request->merek;
        $barang->harga   = $request->harga;
        $barang->stok   = $request->stok;

        $barang->save();

        session()->flash('success','Data berhasil dirubah');

        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::findOrFail($id);

        $barang->delete();
        return redirect()->route('barang.index')->with('success','Data berhasil dihapus');
    }
}
