<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Biodata;

class BiodatasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $biodatas = Biodata::all();
        // cara manggilnya = folder.file
        return view('biodata.index', compact('biodatas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biodata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
               'nama_lengkap'  => 'required|string|max:100', 
               'jenis_kelamin' => 'required',
               'tanggal_lahir' => 'required|date|max:10',
               'tempat_lahir' => 'required|string|max:100',
               'agama' => 'required|max:100',
               'alamat' => 'required|string|max:150',
               'telepon' => 'required|string|max:15',
               'email' => 'required|string|max:50',

        ],
        [
               'nama_lengkap.required'  => 'Form tidak boleh kosong', 
               'jenis_kelamin.required' => 'Form tidak boleh kosong',
               'tanggal_lahir.required' => 'Form tidak boleh kosong',
               'tempat_lahir.required' => 'Form tidak boleh kosong',
               'agama.required' => 'Form tidak boleh kosong',
               'alamat.required' => 'Form tidak boleh kosong',
               'telepon.required' => 'Form tidak boleh kosong',
               'email.required' => 'Form tidak boleh kosong',
        ]);

        $biodatas                  = new Biodata;
        $biodatas->nama_lengkap    = $request->nama_lengkap;
        $biodatas->jenis_kelamin   = $request->jenis_kelamin;
        $biodatas->tanggal_lahir   = $request->tanggal_lahir;
        $biodatas->tempat_lahir    = $request->tempat_lahir;
        $biodatas->agama           = $request->agama;
        $biodatas->alamat          = $request->alamat;
        $biodatas->telepon         = $request->telepon;
        $biodatas->email           = $request->email;
        $biodatas->cover           = $request->cover;

        if ($request->hasFile('cover')) {
            $img  = $request->file('cover');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('images/', $name);
            $biodatas->cover = $name;
        }

        $biodatas->save();

        session()->flash('success','Data berhasil ditambahkan');

        return redirect()->route('biodata.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $biodatas = Biodata::findOrFail($id);
        return view('biodata.show', compact('biodatas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $biodatas = Biodata::findOrFail($id);
        return view('biodata.edit', compact('biodatas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $biodatas = Biodata::findOrFail($id);
        $biodatas->nama_lengkap    = $request->nama_lengkap;
        $biodatas->jenis_kelamin   = $request->jenis_kelamin;
        $biodatas->tanggal_lahir   = $request->tanggal_lahir;
        $biodatas->tempat_lahir    = $request->tempat_lahir;
        $biodatas->agama           = $request->agama;
        $biodatas->alamat          = $request->alamat;
        $biodatas->telepon         = $request->telepon;
        $biodatas->email           = $request->email;

        if ($request->hasFile('cover')) {
            $img  = $request->file('cover');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('images/', $name);
            $biodatas->cover = $name;
        }

        $biodatas->save();

        session()->flash('success','Data berhasil ditambahkan');

        return redirect()->route('biodata.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $biodatas = Biodata::findOrFail($id);

        if ($biodatas->cover) {
            $filePath = public_path('images/' . $biodatas->cover);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }
        
        $biodatas->delete();
        return redirect()->route('biodata.index')->with('success','Data berhasil dihapus');
    }
}
