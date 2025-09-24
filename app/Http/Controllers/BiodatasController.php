<?php

namespace App\Http\Controllers;

use App\Models\Biodata;

class BiodatasController extends Controller
{
    public function tampilkan()
    {
        $biodata = Biodata ::all();
        return view('tampil_biodata', compact('biodata'));
    }
}
