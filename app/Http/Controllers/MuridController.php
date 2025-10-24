<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Murid;
use Illuminate\Support\Facades\File;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $murid = Murid::all();
        // cara manggilnya = folder.file
        return view('murid.index', compact('murid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('murid.create',compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap'   => 'required|string|max:250',
            'jenis_kelamin'   => 'required|string|max:250',
            'tanggal_lahir'   => 'required|string|max:250',
            'tempat_lahir'   => 'required|string|max:250',
            'agama'   => 'required|string|max:250',
            'alamat'   => 'required|string|max:250',
            'email'   => 'required|string|max:250',
            'id_kelas'   => 'required|exists:kelas,id',
            // 'cover'   => 'required|images', 

        ],
        [
            'nama_lengkap.required' => 'nama_lengkap tidak boleh kosong',
            'jenis_kelamin.required' => 'jenis_kelamin tidak boleh kosong',
            'tanggal_lahir.required' => 'tanggal_lahir tidak boleh kosong',
            'tempat_lahir.required' => 'tempat_lahir tidak boleh kosong',
            'agama.required' => 'agama tidak boleh kosong',
            'alamat.required' => 'alamat tidak boleh kosong',
            'email.required' => 'email tidak boleh kosong',
            // 'id_kelas.required' => 'id_kelas tidak boleh kosong',
            // 'cover.required' => 'Cover tidak boleh kosong',
        ]);

        $murid          = new Murid;
        $murid->nama_lengkap   = $request->nama_lengkap;
        $murid->jenis_kelamin   = $request->jenis_kelamin;
        $murid->tanggal_lahir   = $request->tanggal_lahir;
        $murid->tempat_lahir   = $request->tempat_lahir;
        $murid->agama   = $request->agama;
        $murid->alamat   = $request->alamat;
        $murid->email   = $request->email;
        $murid->id_kelas   = $request->id_kelas;

        $murid->save();

        session()->flash('success','Data berhasil ditambahkan');

        return redirect()->route('murid.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $murid = Murid::findOrFail($id);
        return view('murid.show', compact('murid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $murid = Murid::findOrfail($id);
        $kelas = Kelas::all();
        return view('murid.edit', compact('murid','kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'nama_lengkap'   => 'required|string|max:250',
            'jenis_kelamin'   => 'required|string|max:250',
            'tanggal_lahir'   => 'required|string|max:250',
            'tempat_lahir'   => 'required|string|max:250',
            'agama'   => 'required|string|max:250',
            'alamat'   => 'required|string|max:250',
            'email'   => 'required|string|max:250',
            'id_kelas'   => 'required|exists:kelas,id',
            // 'cover'   => 'required|images', 

        ],
        [
            'nama_lengkap.required' => 'nama_lengkap tidak boleh kosong',
            'jenis_kelamin.required' => 'jenis_kelamin tidak boleh kosong',
            'tanggal_lahir.required' => 'tanggal_lahir tidak boleh kosong',
            'tempat_lahir.required' => 'tempat_lahir tidak boleh kosong',
            'agama.required' => 'agama tidak boleh kosong',
            'alamat.required' => 'alamat tidak boleh kosong',
            'email.required' => 'email tidak boleh kosong',
            // 'id_kelas.required' => 'id_kelas tidak boleh kosong',
            // 'cover.required' => 'Cover tidak boleh kosong',
        ]);

        $murid          = Murid::findOrfail($id);
        $murid->nama_lengkap   = $request->nama_lengkap;
        $murid->jenis_kelamin   = $request->jenis_kelamin;
        $murid->tanggal_lahir   = $request->tanggal_lahir;
        $murid->tempat_lahir   = $request->tempat_lahir;
        $murid->agama   = $request->agama;
        $murid->alamat   = $request->alamat;
        $murid->email   = $request->email;
        $murid->id_kelas   = $request->id_kelas;

        $murid->save();

        session()->flash('success','Data berhasil diubah');

        return redirect()->route('murid.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $murid = Murid::findOrFail($id);
        $murid->delete();
        return redirect()->route('murid.index')->with('success','Data berhasil dihapus');
    }
}
