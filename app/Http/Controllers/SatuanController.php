<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Satuan;
use Illuminate\Support\Facades\DB;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $satuan = Satuan::all();
        return view('satuan.index', ['satuan'=>$satuan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'id' => 'required',
        'satuan' => 'required',
    ]);
        // insert data ke table pegawai
        DB::table('satuan11')->insert([
       'id' => $request->id,
       'satuan' => $request->satuan,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('satuan.index')-> with('status', 'Data Satuan Penilaian Telah Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        if ($request->isMethod('POST')) {
            $tp = $request->all();
        }
        $satuan=DB::table('satuan11')->where('id', $request->id)->update([
     'id' => $request->id,
     'satuan' => $request->satuan,
     ]);
        return redirect('satuan.index')-> with('status', 'Data Satuan Penilaian Telah Berhasil Diubah!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // menghapus data Kuadran berdasarkan id yang dipilih
        DB::table('satuan11')->where('id', $id)->delete();

        // alihkan halaman ke halaman kuadran
        return redirect('satuan.index')-> with('status', 'Data Satuan Penilaian Telah Berhasil Dihapuskan!');
    }
}
