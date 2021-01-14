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
              <button type="button" class="btn btn-success" onclick="return confirm('Apakah anda yakin ingin mengirim data ke Atasan ?')">Approval</button>
          <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Target Kerja</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                      <label for="kuadran" class="col-form-label">Kuadran:</label>
                      <select name="kuadran" id="kuadran" class="form-control">
                        <option value=""> ==  Pilih Kuadran== </option>
                        @foreach($kuadrans as $kdr)
                          <option value="{{ $kdr->id}}">{{$kdr->kuadran}}</option>
                        @endforeach
                      </select>
                  </div>

                  <div class="modal-body">
                      <label for="kpi" class="col-form-label">KPI:</label>
                      <select name="kpi" id="kpi" class="form-control">
                        <option value=""> ==Pilih KPI== </option>
                        @foreach($kpis as $item)
                          <option value="{{ $item->id}}">{{$item->nama_kpi}}</option>
                        @endforeach
                      </select>
                  </div>

                  <div class="modal-body">
                      <label for="satuan" class="col-form-label">Satuan:</label>
                      <select name="satuan" id="satuan" class="form-control">
                        <option value=""> ==Pilih Satuan== </option>
                        @foreach($satuans as $item)
                          <option value="{{ $item->id}}">{{$item->satuan}}</option>
                        @endforeach
                      </select>
                  </div>

                  <div class="modal-body">
                      <label for="document" class="col-form-label">Document:</label>
                      <select name="document" id="document" class="form-control">
                        <option value=""> ==Pilih Document== </option>
                        @foreach($dkms as $item)
                          <option value="{{ $item->id}}">{{$item->document}}</option>
                        @endforeach
                      </select>
                  </div>

                  <div class="modal-body">
                      <label for="nilai_maksimal" class="col-form-label">Nilai Maksimal:</label>
                      <select name="nilai_maksimal" id="nilai_maksimal" class="form-control">
                        <option value=""> ==Pilih Nilai Maksimal==</option>
                        @foreach($nmaxs as $item)
                          <option value="{{ $item->id}}">{{$item->nilai_maksimal}}</option>
                        @endforeach
                      </select>
                   </div>


      <div class="modal-body">
                  <label for="nilai_maksimal" class="col-form-label">Tipe Penilaian</label>
                  <select type="text" name="periode_nilai" id="periode_nilai" class="form-control" required=""  onchange="showperiode_nilai();">
                             <option value="">--Pilih--</option>
                             <option value="bulanan">Bulanan</option>
                             <option value="quarter">Quarter</option>
                             <option value="semester">Semester</option>
                             <option value="tahunan">Tahunan</option>
                  </select>
            <div id="show_heading" style="display: none;">
              <table class="table">
                <tbody>
                <tr>
                  <td >Januari</td>
                  <td >:</td>
                  <td> <input type="text" placeholder="Januari" name="target_01" class="form-control" id="target_01" value="0"> </td>
                  <td>Februari</td>
                  <td >:</td>
                  <td><input type="text" placeholder="Februari" name="target_02" class="form-control"  id="target_02" value="0"> </td>
                  <td >Maret</td>
                  <td >:</td>
                  <td><input type="text" placeholder="Maret" name="target_03" class="form-control"  id="target_03" value="0"> </td>
                </tr>

                <tr>
                  <td>April</td>
                  <td>:</td>
                  <td><input type="text" placeholder="April" name="target_04" class="form-control"  id="target_04" value="0"> </td>
                  <td>Mei</td>
                  <td >:</td>
                  <td><input type="text" placeholder="Mei" name="target_05" class="form-control"  id="target_05" value="0"> </td>
                  <td >Juni</td>
                  <td >:</td>
                  <td><input type="text" placeholder="Juni" name="target_06" class="form-control" id="target_06" value="0"> </td>
                </tr>


                <tr>
                  <td >Juli</td>
                  <td >:</td>
                  <td><input type="text" placeholder="Juli" name="target_07" class="form-control"  id="target_07" value="0"> </td>
                  <td>Agustus</td>
                  <td >:</td>
                  <td><input type="text" placeholder="Agustus" name="target_08" class="form-control"  id="target_08" value="0"> </td>
                  <td>September</td>
                  <td >:</td>
                  <td><input type="text" placeholder="September" name="target_09" class="form-control"  id="target_09" value="0"> </td>
                </tr>

                <tr>
                  <td>Oktober</td>
                  <td >:</td>
                  <td><input type="text" placeholder="Oktober" name="target_10" class="form-control"  id="target_10" value="0"> </td>
                  <td>November</td>
                  <td>:</td>
                  <td><input type="text" placeholder="November" name="target_11" class="form-control"  id="target_11" value="0"> </td>
                  <td>Desember</td>
                  <td >:</td>
                  <td><input type="text" placeholder="Desember" name="target_12" class="form-control"  id="target_12" value="0"> </td>
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
                <td ><input type="text" id="q1" placeholder="Target Absolut Q1" name="target_q1" class="form-control form-control-sm" value="0"> </td>
                <td><input type="text" name="tgl_target_q1" id="tgl_q1" class="form-control flatpickr flatpickr-input" value="" data-date-format="d-m-Y" placeholder="Tanggal Absolut Q1" readonly="readonly"></td>
              </tr>

              <tr>
                <td> Nilai Quater 2</td>
                <td >:</td>
                <td><input type="text" id="q2" placeholder="Target Absolut Q2" name="target_q2" class="form-control form-control-sm" value="0"> </td>
                <td><input type="text" name="tgl_target_q2" id="tgl_q2" class="form-control flatpickr flatpickr-input" value="" data-date-format="d-m-Y" placeholder="Tanggal Absolut Q2" readonly="readonly"></td>
              </tr>

              <tr>
                <td> Nilai Quater 3</td>
                <td >:</td>
                <td> <input type="text" id="q3" placeholder="Target Absolut Q3" name="target_q3" class="form-control form-control-sm" value="0"> </td>
                <td><input type="text" name="tgl_target_q3" id="tgl_q3" class="form-control flatpickr flatpickr-input" value="" data-date-format="d-m-Y" placeholder="Tanggal Absolut Q3" readonly="readonly"></td>
              </tr>

              <tr>
                <td> Nilai Quater 4</td>
                <td>:</td>
                <td> <input type="text" id="q4" placeholder="Target Absolut Q4" name="target_q4" class="form-control form-control-sm" value="0"> </td>
                <td><input type="text" name="tgl_target_q4" id="tgl_q4" class="form-control flatpickr flatpickr-input" value="" data-date-format="d-m-Y" placeholder="Tanggal Absolut Q4" readonly="readonly"></td>
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
                      <td> <input type="text" id="semester1" placeholder="Target Absolut Semester 1" name="target_semester1" class="form-control form-control-sm" value="0"> </td>
                      <td> <input type="text" name="tgl_target_semester1" id="tgl_target_semester1" class="form-control flatpickr flatpickr-input active" value="" data-date-format="d-m-Y" placeholder="Tanggal Semester 1" readonly="readonly">
                      </td>
                    </tr>

                    <tr>
                      <td> Nilai Semester 2</td>
                      <td>:</td>
                      <td><input type="text" id="semester2" placeholder="Target Absolut Semester 2" name="target_semester2" class="form-control form-control-sm" value="0"> </td>
                      <td><input type="text" name="tgl_target_semester2" id="tgl_target_semester2" class="form-control flatpickr flatpickr-input active" value="" data-date-format="d-m-Y" placeholder="Tanggal Semester 2" readonly="readonly"></td>
                    </tr>

                  </tbody>
              </table>
          </div>

          <div id="show_heading4" style="display: none;">
              <table class="table" style="font-weight: bold;">
                  <tbody>
                      <tr>
                            <td>Target Absolut Tahunan</td>
                            <td>:</td>
                            <td>  <input type="text" id="target_tahun_unit" placeholder="Target Absolut" name="target_tahun_unit" class="form-control form-control-sm"> </td>
                            <td><input type="text" name="tgl_target_tahun_unit" id="tgl_target_tahun_unit" class="form-control flatpickr flatpickr-input active" data-date-format="d-m-Y" value="" placeholder="Tanggal Target Absolut Tahunan" readonly="readonly"></td>
                      </tr>
                  </tbody>
              </table>
          </div>




        </div>

                   <div class="modal-body">
                     <div class="form-group">
                       <label for="bobot" class="col-form-label">Target Absolut:</label>
                       <input name="bobot"type="text" class="form-control" id="bobt" placeholder="" value="">
                       @error('bobot')
                       <div class="invalid-feedback">{{$message}}</div>
                       @enderror
                     </div>
                   </div>

                  <div class="modal-body">
                    <div class="form-group">
                      <label for="bobot" class="col-form-label">Bobot:</label>
                      <input name="bobot"type="text" class="form-control" id="bobt" placeholder="" value="">
                      @error('bobot')
                      <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="modal-footer">
                      <button type="button" class="btn btn-primary">Add</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  </div>

                </div>
              </div>
            </div>
          <!-- Modal -->



      <table id="example" class="display" style="width:100%">

            <thead>

                  <tr>
                    <th>No</th>
                    <th>Kuadran</th>
                    <th>KPI</th>
                    <th>Satuan</th>
                    <th>Document</th>
                    <th>Tipe Penilaian</th>
                    <th>Target Absolut</th>
                    <th>nilai_maksimal</th>
                    <th>Bobot</th>
                    <th>Total Target Absolut</th>
                    <th>Status</th>
                    <th>Info</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <th>0</th>
                      <td>2</td>
                      <td>3</td>
                      <td>4</td>
                      <td>5</td>
                      <td>6</td>
                      <td>7</td>
                      <td>8</td>
                      <td>5</td>
                      <td>6</td>
                      <td>7</td>
                      <td>8</td>
                  </tr>
              </tbody>
              <tfoot>
                  <tr>
                      <th>No</th>
                      <th>Kuadran</th>
                      <th>KPI</th>
                      <th>Satuan</th>
                      <th>Document</th>
                      <th>Tipe Penilaian</th>
                      <th>Target Absolut</th>
                      <th>nilai_maksimal</th>
                      <th>Bobot</th>
                      <th>Total Target Absolut</th>
                      <th>Status</th>
                      <th>Info</th>
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
if (test == "bulanan")
  {
  $('#show_heading').show();
  $('#show_heading2').hide();
  $('#show_heading3').hide();
  $('#show_heading4').hide();
  } else if (test == "quarter") {
  $('#show_heading2').show();
  $('#show_heading').hide();
  $('#show_heading3').hide();
  $('#show_heading4').hide();
  } else if (test == "semester") {
  $('#show_heading3').show();
  $('#show_heading').hide();
  $('#show_heading2').hide();
  $('#show_heading4').hide();
  }else if (test == "tahunan") {
  $('#show_heading4').show();
  $('#show_heading').hide();
  $('#show_heading3').hide();
  $('#show_heading2').hide();
  }

}



</script>

  @endsection
