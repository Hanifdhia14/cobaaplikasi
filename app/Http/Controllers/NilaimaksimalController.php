<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class NilaimaksimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilaimaksimal11 = DB::table('nilaimaksimal11')->get();
        return view('nilai_maksimal.index', ['nilai_maksimal'=>$nilaimaksimal11]);
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
        // insert data ke table Nilaisimal
        DB::table('nilaimaksimal11')->insert([
         'id' => $request->id,
         'nilai_maksimal' => $request->nilai_maksimal,

  ]);
        // alihkan halaman ke halaman Nilai Maksimal
        return redirect('nilai_maksimal.index');
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
        //
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
        // menghapus data nilai_maksimal berdasarkan id yang dipilih
        DB::table('nilaimaksimal11')->where('id', $id)->delete();

        // alihkan halaman ke halaman nilai_maksimal
        return redirect('nilai_maksimal.index');
    }
}
