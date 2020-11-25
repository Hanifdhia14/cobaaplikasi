@extends('layouts.master')


  @section('content')
  <style media="screen">
  h1{
    color: darkblue;
    margin-left: 20pt;
    font-style: article;
  }
  button{
    margin-top: 30pt;
    margin-left: 50pt;

  }
  table{
    margin-top: 80pt;
    margin-left: 100pt;
    margin-right: 30pt;

  }


  </style>

<div ="container-fluid">
  <div class="content-wrapper">
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

    <div class="row" >
          <div class="col-sm-3 col-md-10">
            <div class="table-table responsive">
              <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col" class="text-center">Id</th>
                  <th scope="col" class="text-center">Nama KPI</th>
                  <th scope="col" class="text-center">Description</th>
                  <th scope="col"class="text-center" >Polaritas</th>
                  <th scope="col"class="text-center" >Parameter</th>
                  <th scope="col"class="text-center" >Start Date</th>
                  <th scope="col"class="text-center" >End Date</th>
                  <th scope="col"class="text-center" >Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($kpi as $kpi)
                  <tr class="text-center">
                    <th scope="row" class="">{{$loop-> iteration}}</th>
                    <td class="">{{$kpi->id}}</td>
                    <td class="">{{$kpi->nama_kpi}}</td>
                    <td class="col-sm-6">{{$kpi->description}}</td>
                    <td class="">{{$kpi->polaritas}}</td>
                    <td class="">{{$kpi->parameter}}</td>
                    <td class="">{{$kpi->start_date}}</td>
                    <td class="">{{$kpi->end_date}}</td>
                    <td class="" >
                        <a href="" class="btn btn-primary"data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">edit</a>
                        <a href="kpi.index.destroy{{$kpi->id }}" class="btn btn-danger">delete</a>
                    </td>
                  </tr>
                @endforeach

                </tbody>
              </table>
            </div>
          </div>
      </div>
  </div>


</div>
  @endsection
