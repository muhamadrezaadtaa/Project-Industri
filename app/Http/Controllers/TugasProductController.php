<?php

namespace App\Http\Controllers;

use App\Models\TugasProduct;
use Illuminate\Http\Request;

class TugasProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $tugas_products = TugasProduct::all();
    return view('tugas_industri', compact('tugas_products'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TugasProduct $tugasProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TugasProduct $tugasProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TugasProduct $tugasProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TugasProduct $tugasProduct)
    {
        //
    }
}
