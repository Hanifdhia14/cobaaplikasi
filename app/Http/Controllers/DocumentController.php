<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Document;


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
        $document= Document::all();
        return view('document.index', ['document'=>$document]);
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
          'kode_document' => 'required',
          'document' => 'required',
      ]);
        // insert data ke table document
        $document = new document;
        $document-> kode_document = $request-> kode_document;
        $document-> document = $request-> document;
        $document->save();
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
    public function edit(Request $request, Document $dokumen)
    {
        $request->validate([
        'kode_document' => 'required',
        'document' => 'required',
          ]);
        if ($request->isMethod('POST')) {
            $dcm = $request->all();
        }
        //  $document=DB::table('dokumen')->where('kode_document', $request-> kode_document)->update([
        //'kode_document' => $request-> kode_document,
        //  'document' => $request-> document,
        //  ]);
        Document::where('kode_document', $request->kode_document)
          ->update([
            'kode_document'=> $request-> kode_document,
            'document'=> $request-> document
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
        //DB::table('dokumen')->where('id', $id)->delete();
        Document::destroy($document->id);
        // alihkan halaman ke halaman document
        return redirect('document.index')-> with('status', 'Data Document Telah Berhasil Dihapuskan!');
    }
}
