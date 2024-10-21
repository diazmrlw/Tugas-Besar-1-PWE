<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Http\Requests\StorePenjualanRequest;
use App\Http\Requests\UpdatePenjualanRequest;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $produk=Penjualan::all();
        return view('product', ['produk'=>$produk]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function createproduk(Request $request)
    {
        Penjualan::create([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'jumlah_produk' => $request->jumlah_produk,
        ]);

        return redirect('/produk');
    }
    public function ViewAddProduk()
    {
        return view('addproduk');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePenjualanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenjualanRequest $request, Penjualan $penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penjualan $penjualan)
    {
        //
    }
}
