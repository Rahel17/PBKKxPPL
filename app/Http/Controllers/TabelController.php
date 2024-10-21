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
            'hari_tanggal' => 'required|date', 
            'uraian' => 'required',
            'bidang' => 'required',
            'pemasukan' => 'required', 
            'pengeluaran' => 'required', 
            'total' => 'required', 
            'penerima_pemberi' => 'required',
            'bukti_transaksi' => 'required', 
            'status_spj' => 'required|in:Diserahkan,Belum Diserahkan', 
            'anggota_id' => 'required|exists:anggotas,id',
        ]);

       $uang = Uang::create($request->all());
       $uang->save();
       if($uang){
        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');
       }

        
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
    public function edit($id)
    {
        $uang = Uang::find($id);
        return view('edit', ['uangs' => $uang]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'hari_tanggal' => 'required',
        'uraian' => 'required',
        'bidang' => 'required',
        'pemasukan' => 'required',
        'pengeluaran' => 'required',
        'total' => 'required',
        'penerima_pemberi' => 'required',
        'bukti_transaksi' => 'required',
        'status_spj' => 'required|in:Diserahkan,Belum Diserahkan',
    ]);

    $uang = Uang::findOrFail($id); // Cari data Uang berdasarkan ID
    $uang->update($validated);
    return redirect('/tabel')->with('success', 'Data Berhasil Diubah');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $uang = Uang::find($id);
        $uang->delete();
        return redirect('/tabel')->with('success', 'Data Berhasil Dihapus');
    }
}
