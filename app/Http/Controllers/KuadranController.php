<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kuadran;

use Illuminate\Support\Facades\DB;

use Haruncpi\LaravelIdGenerator\IdGenerator;

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
        $kuadran = Kuadran::all();
        return view('kuadran.index', ['kuadran'=>$kuadran]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
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
        $request->validate([
              'id' => 'required',
              'kuadran' => 'required',
              'start_date' => 'required',
              'end_date' => 'required',
          ]);
        // insert data ke table kuadran
        DB::table('kuadran11')->insert([
         'id' => $request ->id,
         'kuadran' => $request->kuadran,
         'start_date' => $request->start_date,
         'end_date' => $request->end_date
  ]);

        // alihkan halaman ke halaman kuadran
        return redirect('kuadran.index')-> with('status', 'Data Kuadran Telah Berhasil Ditambahkan!');
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
            $kdr = $request->all();
        }
        $kuadran=DB::table('kuadran11')->where('id', $request->id)->update([
         'id' => $request->id,
         'kuadran' => $request->kuadran,
         'start_date' => $request->start_date,
         'end_date' => $request->end_date
         ]);
        return redirect('kuadran.index')-> with('status', 'Data Kuadran Telah Berhasil Diubah!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
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
        return redirect('kuadran.index')-> with('status', 'Data Kuadran Telah Berhasil Dihapuskan!');
    }
}
