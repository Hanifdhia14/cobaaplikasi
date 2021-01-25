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
#btn1{
    margin-top: 50px;
    float: right;
    margin-left: 20px;
  }
#btn2{
      margin-top: 50px;
      float: right;
      margin-left: 20px;
      margin-right: 20px;}

  </style>

<div ="container-fluid">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <h1>Input Nilai Kerja</h1>
          <hr class="sidebar-divider">



<div class="card">
  <div class="card-header">
    <div class="col-lg-12">

<form class="" action="index.html" method="post">
  <table class="table table-over" style="width:100%">
    <thead>
      <tbody>

             <tr>
                <th width="150">Nama Pegawai</th>
                <td>:</td>
             </tr>
             <tr>
                <th>Jabatan</th>
                <td>:</td>
             </tr>
             <tr>
                <th>level </th>
                <td>:</td>
             </tr>
             <tr>
                <th>Unit Kerja</th>
                <td>:</td>
             </tr>
            <th> Tahun </th>
             <td> <select name="Tahun_nilai" type="text" class="form-control" id="Level_nilai">
                   <option>-Pilih-</option>
                   <option>2021</option>
                   <option>2022</option>
                   <option>2023</option>
                   <option>2024</option>
                 </select> </td>

          </tbody>

    </thead>
  </table>




  <table id="example" class="display" style="width:100%">

        <thead>
              <tr>
                <th>No</th>
                <th>Kuadran</th>
                <th>KPI</th>
                <th>Satuan</th>
                <th>Tipe Penilaian</th>
                <th>Target Absolut</th>
                <th>Bobot</th>
                <th>Realisasi % </th>
                <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td >
                        <a class="btn btn-success" data-toggle="modal" data-target="#edit-">Input</a>
                        <a class="btn btn-warning" data-toggle="modal" data-target="#edit-">Edit</a>

                  </td>
              </tr>
          </tbody>
          <tfoot>
              <tr>
                  <th>No</th>
                  <th>Kuadran</th>
                  <th>KPI</th>
                  <th>Satuan</th>
                  <th>Tipe Penilaian</th>
                  <th>Target Absolut</th>
                  <th>Bobot</th>
                  <th>Realisasi % </th>
                  <th>Aksi</th>
              </tr>
          </tfoot>
      </table>
      <button id="btn2" type="button" class="btn btn-success" onclick="return confirm('Apakah anda yakin hasil KPI untuk disubmit ?')">Submit</button>
      <button id="btn1" type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">Save</button>
</form>




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


  @endsection
