<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class KuadranController extends Controller
{
    /**
     *
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     **/
    public function index()
    {
        $kuadran11 = DB::table('kuadran11')->get();
        //$kuadran11 =kuadran11::all();
        return view('kuadran.index', ['kuadran'=>$kuadran11]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request$request)
    {
        //return view('kuadran.index');//return 'Bisa Submit';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table kuadran
        DB::table('kuadran11')->insert([
       'id' => $request->id,
       'kuadran' => $request->kuadran,
       'start_date' => $request->start_date,
       'end_date' => $request->end_date
  ]);
        // alihkan halaman ke halaman kuadran
        return redirect('kuadran.index');
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
    public function edit($id)
    {
        return redirect('kuadran.index', compact('kuadran'));
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
        // update data pegawai
        DB::table('kuadran')->where('id', $request->id)->update([
          'id' => $request->id,
          'kuadran' => $request->kuadran,
          'start_date' => $request->start_date,
          'end_date' => $request->end_date
      ]);
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
        DB::table('kuadran11')->where('id', $id)->delete();

        // alihkan halaman ke halaman kuadran
        return redirect('kuadran.index');
    }
}
