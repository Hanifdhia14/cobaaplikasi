<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $document11 = DB::table('document11')->get();
        return view('document.index', ['document'=>$document11]);
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
          'document' => 'required',
      ]);
        // insert data ke table document
        DB::table('document11')->insert([
     'id' => $request->id,
     'document' => $request->document,
      ]);
        // alihkan halaman ke halaman document
        return redirect('document.index')-> with('status', 'Data document Telah Berhasil Diubah!');
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
        $document=DB::table('document11')->where('id', $request->id)->update([
        'id' => $request->id,
        'document' => $request->document,
        ]);
        return redirect('document.index')-> with('status', 'Data document Telah Berhasil Diubah!');
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
        // menghapus data document berdasarkan id yang dipilih
        DB::table('document11')->where('id', $id)->delete();

        // alihkan halaman ke halaman document
        return redirect('document.index')-> with('status', 'Data document Telah Berhasil Dihapuskan!');
    }
}
