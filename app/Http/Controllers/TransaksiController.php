<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Pembeli;
use App\Models\Transaksi;
use Illuminate\Support\Facades\File;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        // cara manggilnya = folder.file
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $barang = Barang::all();
        $pembeli = Pembeli::all();
        return view('transaksi.create',compact('barang','pembeli'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     // 'tanggal_transaksi'   => 'required|date|max:250',
        //     'jumlah'   => 'required|string|max:250',
        //     'total_harga'   => 'required|string|max:250',
        //     // 'id_barang'   => 'required|exists:barang,id',
        //     // 'id_pembeli'   => 'required|exists:pembeli,id',
        //     // 'cover'   => 'required|images', 

        // ],
        // [
        //     // 'tanggal_transaksi.required' => 'tanggal_transaksi tidak boleh kosong',
        //     'jumlah.required' => 'jumlah tidak boleh kosong',
        //     'total_harga.required' => 'total_harga tidak boleh kosong',
        //     // 'id_kelas.required' => 'id_kelas tidak boleh kosong',
        //     // 'cover.required' => 'Cover tidak boleh kosong',
        // ]);

        $transaksi          = new Transaksi;
        $transaksi->tanggal_transaksi   = $request->tanggal_transaksi;
        $transaksi->jumlah   = $request->jumlah;
        $transaksi->total_harga   = $request->total_harga;
        $transaksi->id_barang   = $request->id_barang;
        $transaksi->id_pembeli   = $request->id_pembeli;

        $transaksi->save();

        session()->flash('success','Data berhasil ditambahkan');

        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaksi = Transaksi::findOrfail($id);
        $barang = Barang::all();
        $pembeli = Pembeli::all();
        return view('transaksi.edit', compact('transaksi','pembeli','barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $transaksi          = Transaksi::findOrfail($id);
        $transaksi->tanggal_transaksi   = $request->tanggal_transaksi;
        $transaksi->jumlah   = $request->jumlah;
        $transaksi->total_harga   = $request->total_harga;
        $transaksi->id_barang   = $request->id_barang;
        $transaksi->id_pembeli   = $request->id_pembeli;

        $transaksi->save();

        session()->flash('success','Data berhasil ditambahkan');

        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success','Data berhasil dihapus');
    }
}
