@extends('layouts.master')


  @section('content')

    <style media="screen">

    div.content{
      height: auto;
    }
    div.card{
      height: 50rem;

    }
    div.card-header{
      height: 50rem
    }
    h1{
      color: darkblue;
      margin-left: 20pt;
      font-style: article;
    }
    button{
      margin-bottom: 20pt;
    }

    </style>

  <div ="container-fluid">
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
          <h1>Input Target Kerja</h1>
            <hr class="sidebar-divider">
  <div class="card">
    <div class="card-header">
      <div class="col-lg-12">
        <table class="table table-hover" style="width:100%">
          <thead>
            <tbody>

                   <tr>
                      <th width="150">Jabatan</th>
                      <td>:</td>
                   </tr>
                   <tr>
                      <th>Level</th>
                      <td>:</td>
                   </tr>
                   <tr>
                      <th>Unit Kerja </th>
                      <td>:</td>
                   </tr>
                   <tr>
                      <th>Wilayah</th>
                      <td>:</td>
                   </tr>
                  <th> Tahun </th>
                   <td> <select name="Tahun" type="text" class="form-control" id="Level">
                         <option>-Pilih-</option>
                         <option>2021</option>
                         <option>2022</option>
                         <option>2023</option>
                         <option>2024</option>
                       </select> </td>

                </tbody>

          </thead>
        </table>
            <div class="modal-body">
              <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                  + Add
                </button>
                <button type="button" class="btn btn-success" data-target="#staticBackdrop" onclick="return confirm('Apakah anda yakin ingin mengirim data ke Atasan ?')">Approval</button>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            <!-- Tambah Modal -->
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Tambah Target Kerja</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form method="POST" action="{{action('Target_kerjaController@store')}}">
                      <div class="modal-body">
                      {{csrf_field()}}
                      <div class="modal-body">
                          <label for="set_kuadran" class="col-form-label">Kuadran:</label>
                          <select type="text"  name="set_kuadran" id="set_kuadran" class="form-control">
                            <option value=""> ==  Pilih Kuadran== </option>
                            @foreach($kuadrans as $kdr)
                              <option value="{{$kdr->kuadran}}">{{$kdr->kuadran}}</option>
                            @endforeach
                          </select>
                      </div>

                      <div class="modal-body">
                          <label for="set_kpi" class="col-form-label">KPI:</label>
                          <select type="text" name="set_kpi" id="set_kpi" class="form-control">
                            <option value=""> ==Pilih KPI== </option>
                            @foreach($kpis as $item)
                              <option value="{{$item->nama_kpi}}">{{$item->nama_kpi}}</option>
                            @endforeach
                          </select>
                      </div>

                      <div class="modal-body">
                          <label for="set_satuan" class="col-form-label">Satuan:</label>
                          <select type="text" name="set_satuan" id="set_satuan" class="form-control">
                            <option value=""> ==Pilih Satuan== </option>
                            @foreach($satuans as $item)
                              <option value="{{$item->satuan}}">{{$item->satuan}}</option>
                            @endforeach
                          </select>
                      </div>

                      <div class="modal-body">
                          <label for="set_document" class="col-form-label">Document:</label>
                          <select type="text" name="set_document" id="set_document" class="form-control">
                            <option value=""> ==Pilih Document== </option>
                            @foreach($dkms as $item)
                              <option value="{{$item->document}}">{{$item->document}}</option>
                            @endforeach
                          </select>
                      </div>

                      <div class="modal-body">
                          <label for="set_nmax" class="col-form-label">Nilai Maksimal:</label>
                          <select type="text" name="set_nmax" id="set_nmax" class="form-control">
                            <option value=""> ==Pilih Nilai Maksimal==</option>
                            @foreach($nmaxs as $item)
                              <option value="{{$item->nilai_maksimal}}">{{$item->nilai_maksimal}}</option>
                            @endforeach
                          </select>
                       </div>


                    <div class="modal-body">
                      <label for="set_tp_nilai" class="col-form-label">Tipe Penilaian</label>
                      <select  name="set_tp_nilai" id="periode_nilai" class="form-control" value="" onchange="showperiode_nilai();">
                                 <option value="">== Pilih Tipe Nilai ==</option>
                                 <option value="Bulanan">Bulanan</option>
                                 <option value="Quarter">Quarter</option>
                                 <option value="Semester">Semester</option>
                                 <option value="Tahunan">Tahunan</option>
                      </select>
                    <div id="show_heading" style="display: none;">
                    <table class="table">
                    <tbody>
                    <tr>
                      <td >Januari</td>
                      <td >:</td>
                      <td> <input type="text" placeholder="Januari" name="target_01" class="form-control" id="target_01" value=""> </td>
                      <td>Februari</td>
                      <td >:</td>
                      <td><input type="text" placeholder="Februari" name="target_02" class="form-control"  id="target_02" value=""> </td>
                      <td >Maret</td>
                      <td >:</td>
                      <td><input type="text" placeholder="Maret" name="target_03" class="form-control"  id="target_03" value=""> </td>
                    </tr>

                    <tr>
                      <td>April</td>
                      <td>:</td>
                      <td><input type="text" placeholder="April" name="target_04" class="form-control"  id="target_04" value=""> </td>
                      <td>Mei</td>
                      <td >:</td>
                      <td><input type="text" placeholder="Mei" name="target_05" class="form-control"  id="target_05" value=""> </td>
                      <td >Juni</td>
                      <td >:</td>
                      <td><input type="text" placeholder="Juni" name="target_06" class="form-control" id="target_06" value=""> </td>
                    </tr>


                    <tr>
                      <td >Juli</td>
                      <td >:</td>
                      <td><input type="text" placeholder="Juli" name="target_07" class="form-control"  id="target_07" value=""> </td>
                      <td>Agustus</td>
                      <td >:</td>
                      <td><input type="text" placeholder="Agustus" name="target_08" class="form-control"  id="target_08" value=""> </td>
                      <td>September</td>
                      <td >:</td>
                      <td><input type="text" placeholder="September" name="target_09" class="form-control"  id="target_09" value=""> </td>
                    </tr>

                    <tr>
                      <td>Oktober</td>
                      <td >:</td>
                      <td><input type="text" placeholder="Oktober" name="target_10" class="form-control"  id="target_10" value=""> </td>
                      <td>November</td>
                      <td>:</td>
                      <td><input type="text" placeholder="November" name="target_11" class="form-control"  id="target_11" value=""> </td>
                      <td>Desember</td>
                      <td >:</td>
                      <td><input type="text" placeholder="Desember" name="target_12" class="form-control"  id="target_12" value=""> </td>
                    </tr>
                    </tbody>
                    </table>
                    </div>

                    <div id="show_heading2" style="display: none;">
                    <table class="table">
                    <tbody>
                    <tr>
                    <td> Nilai Quater 1</td>
                    <td>:</td>
                    <td ><input type="text" id="q1" placeholder="Target Absolut Q1" name="qtr1" class="form-control" value=""> </td>
                    <td><input type="date" data-provide="datepicker" name="tgl_target_q1" id="tgl_q1" class="form-control" value="" placeholder="Tanggal Q1"></td>
                    </tr>

                    <tr>
                    <td> Nilai Quater 2</td>
                    <td >:</td>
                    <td><input type="text" id="q2" placeholder="Target Absolut Q2" name="qtr2" class="form-control" value=""> </td>
                    <td><input type="date" data-provide="datepicker" name="tgl_target_q2" id="tgl_q2" class="form-control" value="" placeholder="Tanggal Q2"></td>
                    </tr>

                    <tr>
                    <td> Nilai Quater 3</td>
                    <td >:</td>
                    <td> <input type="text" id="q3" placeholder="Target Absolut Q3" name="qtr3" class="form-control" value=""> </td>
                    <td><input type="date" data-provide="datepicker" name="tgl_target_q3" id="tgl_q3" class="form-control" value="" placeholder="Tanggal Q3"></td>
                    </tr>

                    <tr>
                    <td> Nilai Quater 4</td>
                    <td>:</td>
                    <td> <input type="text" id="q4" placeholder="Target Absolut Q4" name="qtr4" class="form-control" value=""> </td>
                    <td><input type="date" data-provide="datepicker" name="tgl_target_q4" id="tgl_q4" class="form-control" value="" placeholder="Tanggal Absolut Q4"></td>
                    </tr>
                    </tbody>
                    </table>
                    </div>

                    <div id="show_heading3" style="display: none;">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td> Nilai Semester 1</td>
                          <td>:</td>
                          <td> <input type="text" id="semester1" placeholder="Target Semester 1" name="target_semester1" class="form-control" value=""> </td>
                          <td> <input type="date" data-provide="datepicker" name="tgl_target_semester1" id="tgl_target_semester1" class="form-control" value="" placeholder="Tanggal Semester 1">
                          </td>
                        </tr>

                        <tr>
                          <td> Nilai Semester 2</td>
                          <td>:</td>
                          <td><input type="text" id="semester2" placeholder="Target Semester 2" name="target_semester2" class="form-control" value=""> </td>
                          <td><input type="date" data-provide="datepicker" name="tgl_target_semester2" id="tgl_target_semester2" class="form-control active" value="" placeholder="Tanggal Semester 2"></td>
                        </tr>

                      </tbody>
                    </table>
                    </div>

                    <div id="show_heading4" style="display: none;">
                    <table class="table">
                      <tbody>
                          <tr>
                                <td>Target Absolut Tahunan</td>
                                <td>:</td>
                                <td>  <input type="text" id="target_tahun_unit" placeholder="Target Absolut" name="target_tahun_unit" class="form-control"> </td>
                                <td><input type="date" data-provide="datepicker" name="tgl_target_tahun_unit" id="tgl_target_tahun_unit" class="form-control" value="" placeholder="Tanggal Target Absolut Tahunan"></td>
                          </tr>
                      </tbody>
                    </table>
                    </div>




                    </div>
                       <div class="modal-body">
                         <div class="form-group">
                           <label for="target_absolut" class="col-form-label">Target Absolut:</label>
                           <input name="target_absolut"type="text" class="form-control" id="target_absolut" placeholder="" value="">
                           @error('target_absolut')
                           <div class="invalid-feedback">{{$message}}</div>
                           @enderror
                         </div>
                       </div>

                      <div class="modal-body">
                        <div class="form-group">
                          <label for="bobot" class="col-form-label">Bobot:</label>
                          <input name="bobot"type="text" class="form-control" id="bobot" placeholder="" value="">
                          @error('bobot')
                          <div class="invalid-feedback">{{$message}}</div>
                          @enderror
                        </div>
                      </div>

                      <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Add</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            <!--End Tambah Modal -->


<!--Edit Modal -->
@foreach($set_target as $set)
<div class="modal fade" id="edit-{{$set->id_set_target}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-xl">
  <div class="modal-content">
    <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Target Kerja</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <form method="post" action="{{action('Target_kerjaController@edit')}}" id="editform">
  {{csrf_field()}}
      <div class="modal-body">
      <div class="modal-body">
          <label for="set_kuadran" class="col-form-label">Kuadran:</label>
          <select type="text"  name="set_kuadran" id="set_kuadran" class="form-control">
            <option value=""> {{$set->set_kuadran}}</option>
            @foreach($kuadrans as $kdr)
              <option value="{{$kdr->kuadran}}">{{$kdr->kuadran}}</option>
            @endforeach
          </select>
      </div>

      <div class="modal-body">
          <label for="set_kpi" class="col-form-label">KPI:</label>
          <select type="text" name="set_kpi" id="set_kpi" class="form-control">
        <option value="">{{$set->set_kpi}} </option>
            @foreach($kpis as $item)
              <option value="{{$item->nama_kpi}}">{{$item->nama_kpi}}</option>
            @endforeach
          </select>
      </div>

      <div class="modal-body">
          <label for="set_satuan" class="col-form-label">Satuan:</label>
          <select type="text" name="set_satuan" id="set_satuan" class="form-control">
            <option value="">{{$set->set_satuan}}</option>
            @foreach($satuans as $item)
              <option value="{{$item->satuan}}">{{$item->satuan}}</option>
            @endforeach
          </select>
      </div>

      <div class="modal-body">
          <label for="set_document" class="col-form-label">Document:</label>
          <select type="text" name="set_document" id="set_document" class="form-control">
            <option value="">{{$set->set_document}}</option>
            @foreach($dkms as $item)
              <option value="{{$item->document}}">{{$item->document}}</option>
            @endforeach
          </select>
      </div>

      <div class="modal-body">
          <label for="set_nmax" class="col-form-label">Nilai Maksimal:</label>
          <select type="text" name="set_nmax" id="set_nmax" class="form-control">
            <option value="">{{$set->set_nmax}}</option>
            @foreach($nmaxs as $item)
              <option value="{{$item->nilai_maksimal}}">{{$item->nilai_maksimal}}</option>
            @endforeach
          </select>
       </div>


    <div class="modal-body">
      <label for="set_tp_nilai" class="col-form-label">Tipe Penilaian</label>
      <select  name="set_tp_nilai" id="editperiode_nilai" class="form-control" onchange="editshowperiode_nilai">
                 <option value="">{{$set->set_tp_nilai}}</option>
                 <option value="Bulanan">Bulanan</option>
                 <option value="Quarter">Quarter</option>
                 <option value="Semester">Semester</option>
                 <option value="Tahunan">Tahunan</option>
      </select>
    <div id="show_heading" style="display: none;">
    <table class="table">
    <tbody>
    <tr>
      <td >Januari</td>
      <td >:</td>
      <td> <input type="text" placeholder="Januari" name="target_01" class="form-control" id="target_01" value=""> </td>
      <td>Februari</td>
      <td >:</td>
      <td><input type="text" placeholder="Februari" name="target_02" class="form-control"  id="target_02" value=""> </td>
      <td >Maret</td>
      <td >:</td>
      <td><input type="text" placeholder="Maret" name="target_03" class="form-control"  id="target_03" value=""> </td>
    </tr>

    <tr>
      <td>April</td>
      <td>:</td>
      <td><input type="text" placeholder="April" name="target_04" class="form-control"  id="target_04" value=""> </td>
      <td>Mei</td>
      <td >:</td>
      <td><input type="text" placeholder="Mei" name="target_05" class="form-control"  id="target_05" value=""> </td>
      <td >Juni</td>
      <td >:</td>
      <td><input type="text" placeholder="Juni" name="target_06" class="form-control" id="target_06" value=""> </td>
    </tr>


    <tr>
      <td >Juli</td>
      <td >:</td>
      <td><input type="text" placeholder="Juli" name="target_07" class="form-control"  id="target_07" value=""> </td>
      <td>Agustus</td>
      <td >:</td>
      <td><input type="text" placeholder="Agustus" name="target_08" class="form-control"  id="target_08" value=""> </td>
      <td>September</td>
      <td >:</td>
      <td><input type="text" placeholder="September" name="target_09" class="form-control"  id="target_09" value=""> </td>
    </tr>

    <tr>
      <td>Oktober</td>
      <td >:</td>
      <td><input type="text" placeholder="Oktober" name="target_10" class="form-control"  id="target_10" value=""> </td>
      <td>November</td>
      <td>:</td>
      <td><input type="text" placeholder="November" name="target_11" class="form-control"  id="target_11" value=""> </td>
      <td>Desember</td>
      <td >:</td>
      <td><input type="text" placeholder="Desember" name="target_12" class="form-control"  id="target_12" value=""> </td>
    </tr>
    </tbody>
    </table>
    </div>

    <div id="show_heading2" style="display: none;">
    <table class="table">
    <tbody>
    <tr>
    <td> Nilai Quater 1</td>
    <td>:</td>
    <td ><input type="text" id="q1" placeholder="Target Absolut Q1" name="qtr1" class="form-control" value=""> </td>
    <td><input type="date" data-provide="datepicker" name="tgl_target_q1" id="tgl_q1" class="form-control" value="" placeholder="Tanggal Q1"></td>
    </tr>

    <tr>
    <td> Nilai Quater 2</td>
    <td >:</td>
    <td><input type="text" id="q2" placeholder="Target Absolut Q2" name="qtr2" class="form-control" value=""> </td>
    <td><input type="date" data-provide="datepicker" name="tgl_target_q2" id="tgl_q2" class="form-control" value="" placeholder="Tanggal Q2"></td>
    </tr>

    <tr>
    <td> Nilai Quater 3</td>
    <td >:</td>
    <td> <input type="text" id="q3" placeholder="Target Absolut Q3" name="qtr3" class="form-control" value=""> </td>
    <td><input type="date" data-provide="datepicker" name="tgl_target_q3" id="tgl_q3" class="form-control" value="" placeholder="Tanggal Q3"></td>
    </tr>

    <tr>
    <td> Nilai Quater 4</td>
    <td>:</td>
    <td> <input type="text" id="q4" placeholder="Target Absolut Q4" name="qtr4" class="form-control" value=""> </td>
    <td><input type="date" data-provide="datepicker" name="tgl_target_q4" id="tgl_q4" class="form-control" value="" placeholder="Tanggal Absolut Q4"></td>
    </tr>
    </tbody>
    </table>
    </div>

    <div id="show_heading3" style="display: none;">
    <table class="table">
      <tbody>
        <tr>
          <td> Nilai Semester 1</td>
          <td>:</td>
          <td> <input type="text" id="semester1" placeholder="Target Semester 1" name="target_semester1" class="form-control" value=""> </td>
          <td> <input type="date" data-provide="datepicker" name="tgl_target_semester1" id="tgl_target_semester1" class="form-control" value="" placeholder="Tanggal Semester 1">
          </td>
        </tr>

        <tr>
          <td> Nilai Semester 2</td>
          <td>:</td>
          <td><input type="text" id="semester2" placeholder="Target Semester 2" name="target_semester2" class="form-control" value=""> </td>
          <td><input type="date" data-provide="datepicker" name="tgl_target_semester2" id="tgl_target_semester2" class="form-control active" value="" placeholder="Tanggal Semester 2"></td>
        </tr>

      </tbody>
    </table>
    </div>

    <div id="show_heading4" style="display: none;">
    <table class="table">
      <tbody>
          <tr>
                <td>Target Absolut Tahunan</td>
                <td>:</td>
                <td>  <input type="text" id="target_tahun_unit" placeholder="Target Absolut" name="target_tahun_unit" class="form-control"> </td>
                <td><input type="date" data-provide="datepicker" name="tgl_target_tahun_unit" id="tgl_target_tahun_unit" class="form-control" value="" placeholder="Tanggal Target Absolut Tahunan"></td>
          </tr>
      </tbody>
    </table>
    </div>




    </div>
       <div class="modal-body">
         <div class="form-group">
           <label for="target_absolut" class="col-form-label">Target Absolut:</label>
           <input name="target_absolut"type="text" class="form-control" id="target_absolut" placeholder="" value="{{$set->target_absolut}}">
           @error('target_absolut')
           <div class="invalid-feedback">{{$message}}</div>
           @enderror
         </div>
       </div>

      <div class="modal-body">
        <div class="form-group">
          <label for="bobot" class="col-form-label">Bobot:</label>
          <input name="bobot"type="text" class="form-control" id="bobot" placeholder="" value="{{$set->bobot}}">
          @error('bobot')
          <div class="invalid-feedback">{{$message}}</div>
          @enderror
        </div>
      </div>

      <div class="modal-footer">
          <button type="submit" class="btn btn-primary">change</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </form>
  </div>
</div>
</div>
@endforeach
<!--End Edit Modal -->

        <table id="example" class="display" style="width:100%">

              <thead>

                    <tr>
                      <th>No</th>
                      <th>Kuadran</th>
                      <th>KPI</th>
                      <th>Satuan</th>
                      <th>Document</th>
                      <th>nilai_maksimal</th>
                      <th>Tipe Penilaian</th>
                      <th>Target Absolut</th>
                      <th>Bobot</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($set_target as $set)
                    <tr>
                        <td>{{$loop-> iteration}}</td>
                        <td>{{$set ->set_kuadran}}</td>
                        <td>{{$set ->set_kpi}}</td>
                        <td>{{$set ->set_satuan}}</td>
                        <td>{{$set ->set_document}}</td>
                        <td>{{$set ->set_nmax}}</td>
                        <td>{{$set ->set_tp_nilai}}</td>
                        <td>{{$set ->target_absolut}}</td>
                        <td>{{$set ->bobot}}</td>
                        <td><!--<span class="btn {{($set->status == 0) ? 'btn-success' :'btn-danger' }}">{{($set->status == 0) ? 'Publish':'Pending'}}</span></td>-->
                        <td >
                              <a class="btn btn-primary" data-toggle="modal" data-target="#edit-{{$set->id_set_target}}">edit</a>
                              <a href="user.target_kerja.index.destroy{{$set->id_set_target}}" class="btn btn-danger" class="text-center" onclick="return confirm('Apakah anda yakin ingin mengapus data ?')">delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Kuadran</th>
                        <th>KPI</th>
                        <th>Satuan</th>
                        <th>Document</th>
                        <th>nilai_maksimal</th>
                        <th>Tipe Penilaian</th>
                        <th>Target Absolut</th>
                        <th>Bobot</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>

            </table>

      </div>

    </div>
  </div>

    </div>
  </div>
  <script type="text/javascript">
  $(document).ready(function() {
  $('#example').DataTable( {
      } );
    } );
  </script>

  <script>
  $(document).ready(function() {

    $('#show_heading').hide();
    $('#show_heading2').hide();
    $('#show_heading3').hide();
    $('#show_heading4').hide();

  });
  function showperiode_nilai(){
  test = document.getElementById('periode_nilai').value;
  if (test == "Bulanan")
    {
    $('#show_heading').show();
    $('#show_heading2').hide();
    $('#show_heading3').hide();
    $('#show_heading4').hide();
    } else if (test == "Quarter") {
    $('#show_heading2').show();
    $('#show_heading').hide();
    $('#show_heading3').hide();
    $('#show_heading4').hide();
    } else if (test == "Semester") {
    $('#show_heading3').show();
    $('#show_heading').hide();
    $('#show_heading2').hide();
    $('#show_heading4').hide();
    }else if (test == "Tahunan") {
    $('#show_heading4').show();
    $('#show_heading').hide();
    $('#show_heading3').hide();
    $('#show_heading2').hide();
    }

  }
  </script>


  <script>
  $(document).ready(function() {

    $('#show_heading').hide();
    $('#show_heading2').hide();
    $('#show_heading3').hide();
    $('#show_heading4').hide();

  });
  function editshowperiode_nilai(){
  test = document.getElementById('editperiode_nilai').value;
  if (test == "Bulanan")
    {
    $('#show_heading').show();
    $('#show_heading2').hide();
    $('#show_heading3').hide();
    $('#show_heading4').hide();
    } else if (test == "Quarter") {
    $('#show_heading2').show();
    $('#show_heading').hide();
    $('#show_heading3').hide();
    $('#show_heading4').hide();
    } else if (test == "Semester") {
    $('#show_heading3').show();
    $('#show_heading').hide();
    $('#show_heading2').hide();
    $('#show_heading4').hide();
    }else if (test == "Tahunan") {
    $('#show_heading4').show();
    $('#show_heading').hide();
    $('#show_heading3').hide();
    $('#show_heading2').hide();
    }

  }
  </script>




  @endsection
