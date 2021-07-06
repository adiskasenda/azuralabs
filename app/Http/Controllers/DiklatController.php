<?php

namespace App\Http\Controllers;

use App\Models\Diklat;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class DiklatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diklat =  Diklat::all();
        return view('menu/beranda', compact('diklat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu/tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        Diklat::create($request->all());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diklat  $diklat
     * @return \Illuminate\Http\Response
     */
    public function show(Diklat $diklat)
    {
        return view('menu/detail', compact('diklat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diklat  $diklat
     * @return \Illuminate\Http\Response
     */
    public function edit(Diklat $diklat)
    {
        return view('menu/edit', compact('diklat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diklat  $diklat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diklat $diklat)
    {
        Diklat::where('id', $diklat->id)
                ->update([
                    'nama' => $request->nama,
                    'jenis' => $request->jenis,
                    'deskripsi' => $request->deskripsi,
                    'penyelenggara' => $request->penyelenggara,
                    'biaya' => $request->biaya,
                    'jumlahPeserta' => $request->jumlahPeserta,
                    'kadaluarsaSertifikat' => $request->kadaluarsaSertifikat,
                    'sertifikat' => $request->sertifikat,
                    'tanggalMulai' => $request->tanggalMulai,
                    'tanggalSelesai' => $request->tanggalSelesai,
                    'waktuMulai' => $request->waktuMulai,
                    'durasi' => $request->durasi,
                    'tempat' => $request->tempat,
                    'createdBy' => $request->createdBy,
                    'updatedBy' => $request->updatedBy,
                ]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diklat  $diklat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diklat $diklat)
    {
        Diklat::destroy($diklat->id);
        return redirect('/')->with('sukses', 'Data berhasil dihapus');
    }
}
