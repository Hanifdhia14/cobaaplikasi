<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class HakaksesController extends Controller
{
    public function postlogin(Request $request)
    {
        //  dd($request->null());
        if (Auth:: attempt(['username'=>$request->username,'password'=>$request->password])) {
            return redirect('/main');
        }
        return redirect('login')->with('message', 'Username Atau Password Anda Salah!!');
    }

    public function login(Request $request)
    {
        return view('login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('login');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hakak= DB::table('hakak')->get();
        return view('hakakses.index', ['hakak'=>$hakak]);
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
            'nik' => 'required',
            'name' => 'required',
            'level' => 'required',
            'username' => 'required',
            'password' => 'required'

        ]);

        DB::table('hakak')->insert([
     'nik' => $request->nik,
     'name' => $request->name,
     'level' => $request->level,
     'username' => $request->username,
     'password' => $request->password
  ]);
        return redirect('hakakses.index')-> with('status', 'Data Hak AKses Telah Berhasil Ditambahkan!');
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
            $hk = $request->all();
        }
        $hakak=DB::table('hakak')->where('nik', $request->nik)->update([
           'nik' => $request->nik,
           'name' => $request->name,
           'level' => $request->level,
           'username' => $request->username,
           'password' => $request->password,

        ]);
        return redirect('hakakses.index')-> with('status', 'Data Hak Akses Telah Berhasil Diubah!');
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
    public function destroy($nik)
    {  // menghapus data Kuadran berdasarkan id yang dipilih
        DB::table('hakak')->where('nik', $nik)->delete();

        // alihkan halaman ke halaman kuadran
        return redirect('hakakses.index')-> with('status', 'Data Hak Akses Telah Berhasil Dihapus!');
    }
}
