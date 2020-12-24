<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class KpiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kpi11 = DB::table('kpi11')->get();
        return view('Kpi.index', ['kpi'=>$kpi11]);
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
        'nama_kpi' => 'required',
        'description' => 'required',
        'polaritas' => 'required',
        'parameter' => 'required',
        'start_date' => 'required',
        'end_date' => 'required'
    ]);
        // insert data ke table pegawai
        DB::table('kpi11')->insert([
         'id' => $request->id,
         'nama_kpi' => $request->nama_kpi,
         'description' => $request->description,
         'polaritas' => $request->polaritas,
         'parameter' => $request->parameter,
         'start_date' => $request->start_date,
         'end_date' => $request->end_date
  ]);
        // alihkan halaman ke halaman pegawai
        return redirect('kpi.index')-> with('status', 'Data KPI Telah Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
            $kpi = $request->all();
        }
        $kpi=DB::table('kpi11')->where('id', $request->id)->update([
          'id' => $request->id,
          'nama_kpi' => $request->nama_kpi,
          'description' => $request->description,
          'polaritas' => $request->polaritas,
          'parameter' => $request->parameter,
          'start_date' => $request->start_date,
          'end_date' => $request->end_date
          ]);
        return redirect('kpi.index')-> with('status', 'Data kpi Telah Berhasil Diubah!');
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
        // menghapus data kpi berdasarkan id yang dipilih
        DB::table('kpi11')->where('id', $id)->delete();

        // alihkan halaman ke halaman kpi
        return redirect('kpi.index')-> with('status', 'Data KPI Telah Berhasil Dihapuskan!');
    }
}
