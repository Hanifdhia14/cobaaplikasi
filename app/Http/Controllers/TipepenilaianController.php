<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tipenilai;

use Illuminate\Support\Facades\DB;

class TipepenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipenilai= Tipenilai::all();
        return view('tipe_penilaian.index', ['tipe_penilaian'=>$tipenilai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'tipe_penilaian' => 'required',
        ]);
        //insert data ke table Tipe penilaian
        DB::table('tipepenilaian11')->insert([
         'id' => $request->id,
         'tipe_penilaian' => $request->tipe_penilaian,

  ]);
        // alihkan halaman ke halaman Tipe Penilaian
        return redirect('tipe_penilaian.index')-> with('status', 'Data Tipe Penilaian Telah Berhasil Diambahkan!');
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
        $tipe_penilaian=DB::table('tipepenilaian11')->where('id', $request->id)->update([
       'id' => $request->id,
       'tipe_penilaian' => $request->tipe_penilaian,
       ]);
        return redirect('tipe_penilaian.index')-> with('status', 'Data Tipe Penilaian Telah Berhasil Diubah!');
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
        // menghapus data tipe_penilaian berdasarkan id yang dipilih
        DB::table('tipepenilaian11')->where('id', $id)->delete();

        // alihkan halaman ke halaman tipe_penilaian
        return redirect('tipe_penilaian.index')-> with('status', 'Data Tipe Penilaian Telah Berhasil Dihapuskan!');
    }
}
