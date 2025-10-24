<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use Illuminate\Support\Facades\File;
class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::all();
        // cara manggilnya = folder.file
        return view('kelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_kelas'   => 'required|string|max:50',
            // 'cover'   => 'required|images', 

        ],
        [
            'name_kelas.required' => 'name tidak boleh kosong',
            // 'cover.required' => 'Cover tidak boleh kosong',
        ]);

        $kelas          = new Kelas;
        $kelas->name_kelas   = $request->name_kelas;

        $kelas->save();

        session()->flash('success','Data berhasil ditambahkan');

        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kelas= Kelas::findOrFail($id);
        return view('kelas.show', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->name_kelas   = $request->name_kelas;

        $kelas->save();

        session()->flash('success','Data berhasil dirubah');

        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $kelas = Kelas::findOrFail($id);

        $kelas->delete();
        return redirect()->route('kelas.index')->with('success','Data berhasil dihapus');
    }
}
