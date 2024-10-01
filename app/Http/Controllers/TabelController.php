<?php

namespace App\Http\Controllers;

use App\Models\Uang;
use Illuminate\Http\Request;


class TabelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Uang::all();
        return view ('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no' => 'required | numeric',
            'hari_tanggal' => 'required|date', 
            'uraian' => 'required|string',
            'bidang' => 'required|string',
            'pemasukan' => 'required|numeric', 
            'pengeluaran' => 'required|numeric', 
            'total' => 'required|numeric', 
            'penerima_pemberi' => 'required|string',
            'bukti_transaksi' => 'required|boolean', 
            'status_spj' => 'required|in:Diserahkan,Belum Diserahkan', 
        ]);

        Uang::create($request->all());
        return redirect()->route ('tabel.index')->with('sukses', 'Data Berhasil Ditambahkan');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
