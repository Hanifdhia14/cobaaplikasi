<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Target_kerja;

use App\Models\Kuadran;
use App\Models\Kpi;
use App\Models\Satuan;
use App\Models\Document;
use App\Models\Tipenilai;
use App\Models\Nilaimaksimal;

class Target_kerjaController extends Controller
{
    public function index()
    {
        $set_target= Target_kerja::all();
        $kuadrans= Kuadran::select('id', 'kuadran')->get();
        $kpis= Kpi::select('id', 'nama_kpi', 'description', 'polaritas', 'parameter')->get();
        $satuans= Satuan::select('id', 'satuan')->get();
        $dkms= Document::select('id', 'document')->get();
        $tipe_nilai= Tipenilai::select('id', 'tipe_penilaian')->get();
        $nmaxs= Nilaimaksimal::select('id', 'nilai_maksimal')->get();
        return view('user.target_kerja.index', compact('kuadrans', 'kpis', 'satuans', 'dkms', 'tipe_nilai', 'nmaxs', 'set_target'));
    }




    public function create()
    {
    }




    public function store(Request $request)
    {
        $set_target = new target_kerja;
        $set_target -> set_kuadran = $request-> set_kuadran;
        $set_target -> set_kpi = $request-> set_kpi;
        $set_target -> set_satuan = $request-> set_satuan;
        $set_target -> set_document = $request-> set_document;
        $set_target -> set_nmax = $request-> set_nmax;
        $set_target -> set_tp_nilai = $request-> set_tp_nilai;
        $set_target -> bln_januari = $request-> terget_01;
        $set_target -> bln_februari = $request-> target_02;
        $set_target -> bln_maret = $request-> target_03;
        $set_target -> bln_april = $request-> target_04;
        $set_target -> bln_mei = $request-> target_05;
        $set_target -> bln_juni = $request-> target_06;
        $set_target -> bln_juli = $request-> target_07;
        $set_target -> bln_agustus = $request-> target_08;
        $set_target -> bln_september = $request-> target_09;
        $set_target -> bln_oktober = $request-> target_10;
        $set_target -> bln_november = $request-> target_11;
        $set_target -> bln_desember = $request-> target_12;
        $set_target -> qtr1 = $request-> target_q1;
        $set_target -> tgl_q1 = $request-> tgl_target_q1;
        $set_target -> qtr2 = $request-> target_q2;
        $set_target -> tgl_q2 = $request-> tgl_target_q2;
        $set_target -> qtr3 = $request-> target_q3;
        $set_target -> tgl_q3 = $request-> tgl_target_q3;
        $set_target -> qtr4 = $request-> target_q4;
        $set_target -> tgl_q4 = $request-> tgl_target_q4;
        $set_target -> semester1 = $request-> target_semester1;
        $set_target -> tgl_s1 = $request-> tgl_target_semester1;
        $set_target -> semester2 = $request-> target_semester2;
        $set_target -> tgl_s2 = $request-> tgl_target_semester2;
        $set_target -> tahun = $request-> target_tahun_unit;
        $set_target -> tgl_thn = $request-> tgl_target_tahun_unit;
        $set_target -> target_absolut = $request-> target_absolut;
        $set_target -> bobot = $request-> bobot;
        $set_target -> save();
        return redirect('user.target_kerja.index')-> with('status', 'Data Setting Target Kerja Berhasil Ditambahkan!');

        // alihkan halaman ke Set_target_user
    }

    public function edit(Request $request, Target_kerja $set_target)
    {
        if ($request->isMethod('POST')) {
            $set = $request->all();
        }
        Target_kerja::where('id_set_target', $request->id_set_target)
      ->update([
       'set_kuadran' => $request-> set_kuadran,
       'set_kpi' => $request-> set_kpi,
       'set_satuan' => $request-> set_satuan,
       'set_document' => $request-> set_document,
       'set_nmax' => $request-> set_nmax,
       'set_tp_nilai' => $request-> set_tp_nilai,
       'bln_januari' => $request-> terget_01,
       'bln_februari' => $request-> target_02,
       'bln_maret' => $request-> target_03,
       'bln_april' => $request-> target_04,
       'bln_mei' => $request-> target_05,
       'bln_juni' => $request-> target_06,
       'bln_juli' => $request-> target_07,
       'bln_agustus' => $request-> target_08,
       'bln_september' => $request-> target_09,
       'bln_oktober' => $request-> target_10,
       'bln_november' => $request-> target_11,
       'bln_desember' => $request-> target_12,
       'qtr1' => $request-> target_q1,
       'tgl_q1' => $request-> tgl_target_q1,
       'qtr2' => $request-> target_q2,
       'tgl_q2' => $request-> tgl_target_q2,
       'qtr3' => $request-> target_q3,
       'tgl_q3' => $request-> tgl_target_q3,
       'qtr4' => $request-> target_q4,
       'tgl_q4' => $request-> tgl_target_q4,
       'semester1' => $request-> target_semester1,
       'tgl_s1' => $request-> tgl_target_semester1,
       'semester2' => $request-> target_semester2,
       'tgl_s2' => $request-> tgl_target_semester2,
       'tahun' => $request-> target_tahun_unit,
       'tgl_thn' => $request-> tgl_target_tahun_unit,
       'target_absolut' => $request-> target_absolut,
       'bobot' => $request-> bobot,
      ]);
        return redirect('user.target_kerja.index')-> with('status', 'Data Setting Traget Telah Berhasil Diubah!');
    }


    public function destroy($id_set_target)
    {
        DB::table('set_target_user')->where('id_set_target', $id_set_target)->delete();
        return redirect('user.target_kerja.index')-> with('status', 'Data Setting Traget Telah Berhasil Dihapuskan!');

        // alihkan halaman ke halaman kuadran
    }
}
