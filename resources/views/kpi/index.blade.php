@extends('layouts.master')


  @section('content')
  <style media="screen">
  h1{
    color: darkblue;
    margin-left: 20pt;
    font-style: article;
  }
  button{
    margin-bottom:20pt;
    margin-top: 20pt;
    margin-left: 50pt;

  }
  table{
    margin-top: 80pt;
    margin-left: 100pt;
    margin-right: 30pt;

  }


  </style>

<div ="container-fluid">

    <!-- Content Header (Page header) -->
        <h1>KPI <small>Imput Nama KPI</small></h1>

              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Tambah</button>

              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Tambah KPI</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{action('KpiController@store')}}" >
              {{csrf_field()}}

              <div class="form-group">
                <label for="id" class="col-form-label">Id:</label>
                <input name="id"type="number" class="form-control" id="id" placeholder="Masukkan Id" required>
              </div>
            <form>
              <div class="form-group">
                <label for="nama_kpi" class="col-form-label">Nama KPI:</label>
                <input name="nama_kpi"type="text" class="form-control" id="nama_kpi" placeholder="Masukkan Nama KPI" required>
              </div>
              <div class="form-group">
                <label for="description" class="col-form-label">Description:</label>
                <textarea name="description" class="form-control" id="description" placeholder="Masukkan Deskripsi" required></textarea>
              </div>
              <div class="form-group">
                <label for="polaritas" class="col-form-label">Polaritas:</label>
                <input name="polaritas"type="text" class="form-control" id="polaritas" placeholder="Masukkan Polaritas" required>
              </div>
              <div class="form-group">
                <label for="parameter" class="col-form-label">Parameter:</label>
                <input name="parameter" type="text" class="form-control" id="parameter" placeholder="Masukkan Parameter" required>
              </div>
              <div class="form-group">
                <label for="start_date" class="col-form-label">Start Date:</label>
                <input name="start_date"type="datetime" class="form-control" id="start_date" placeholder="Masukkan Start Date" required>
              </div>
              <div class="form-group">
                <label for="end_date" class="col-form-label">End Date:</label>
                <input name="end_date"type="datetime" class="form-control" id="end_date" placeholder="Masukkan End Date">
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Buat</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>

    <table id="example" class="display" style="width:100%;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama KPI</th>
                    <th>Deskripsi</th>
                    <th>Polaritas</th>
                    <th>Parameter</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($kpi as $kpi)
              <tr>
                <th>{{$loop-> iteration}}</th>
                <td>{{$kpi->id}}</td>
                <td>{{$kpi->nama_kpi}}</td>
                <td>{{$kpi->description}}</td>
                <td>{{$kpi->polaritas}}</td>
                <td>{{$kpi->parameter}}</td>
                <td>{{$kpi->start_date}}</td>
                <td>{{$kpi->end_date}}</td>
                <td >
                    <a href="" class="btn btn-primary"data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">edit</a>
                    <a href="kpi.index.destroy{{$kpi->id }}" class="btn btn-danger">delete</a>
                </td>
              </tr>
            @endforeach

            </tbody>
            <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Nama KPI</th>
                  <th>Deskripsi</th>
                  <th>Polaritas</th>
                  <th>Parameter</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                </tr>
            </tfoot>
        </table>



</div>

<script type="text/javascript">
$(document).ready(function() {
$('#example').DataTable( {
    } );
  } );

</script>
  @endsection
