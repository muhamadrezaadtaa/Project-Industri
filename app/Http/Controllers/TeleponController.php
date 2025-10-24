<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use App\Models\Telepon;
use Illuminate\Support\Facades\File;

class TeleponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datatelepon = Telepon::all();
        // cara manggilnya = folder.file
        return view('telepon.index', compact('datatelepon'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datapengguna = Pengguna::all();
        return view('telepon.create',compact('datapengguna'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor'   => 'required|string|max:250',
            // 'cover'   => 'required|images', 

        ],
        [
            'nomor.required' => 'nomor tidak boleh kosong',
            // 'cover.required' => 'Cover tidak boleh kosong',
        ]);

        $telepon          = new Telepon;
        $telepon->nomor   = $request->nomor;
        $telepon->id_pengguna   = $request->id_pengguna;

        $telepon->save();

        session()->flash('success','Data berhasil ditambahkan');

        return redirect()->route('telepon.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $telepon = Telepon::findOrFail($id);
        return view('telepon.show', compact('telepon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datatelepon = Telepon::findOrfail($id);
        $datapengguna = Pengguna::all();
        return view('telepon.edit', compact('datatelepon','datapengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nomor'   => 'required|string|max:250',
            // 'cover'   => 'required|images', 

        ],
        [
            'nomor.required' => 'nomor tidak boleh kosong',
            // 'cover.required' => 'Cover tidak boleh kosong',
        ]);

        $datatelepon = Telepon::findOrFail($id);
        $datatelepon->nomor   = $request->nomor;
        $datatelepon->id_pengguna   = $request->id_pengguna;

        $datatelepon->save();

        session()->flash('success','Data berhasil dirubah');

        return redirect()->route('telepon.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $telepon = Telepon::findOrFail($id);
        $telepon->delete();
        return redirect()->route('telepon.index')->with('success','Data berhasil dihapus');
    }
}

