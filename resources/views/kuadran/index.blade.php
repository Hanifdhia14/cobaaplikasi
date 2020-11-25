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

<div class="container-lg">
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
        <h1>Master Kuadran <small>Imput Nama Kuadran</small></h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Tambah</button>
        <!-- Search form -->



  <!-- Content tambah modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">

                <h2 class="modal-title" id="modal-tambah">Tambah Kuadran</h2>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>

              <form method="POST" action="{{action('KuadranController@store'),('KuadranController@edit')}}">
                <div class="modal-body">
                {{csrf_field()}}

                <div class="form-group">
                  <label for="id" class="col-form-label">Id:</label>
                  <input name="id"  type="number" class="form-control" id="id"placeholder="Masukkan Id" required>
                </div>
                <div class="form-group">
                  <label for="Kuadran" class="col-form-label">Nama Kuadran:</label>
                  <input name="kuadran"  type="text" class="form-control" id="kuadran" placeholder="Masukkan Kuadran"  required>
                </div>
                <div class="form-group">
                  <label for="start_date" class="col-form-label">Start Date:</label>
                  <input name="start_date" type="datetime" class="form-control" id="start_date" placeholder="Masukkan Start Date"   required>
                </div>
                <div class="form-group">
                  <label for="end_date" class="col-form-label">End Date:</label>
                  <input name="end_date" type="datetime" class="form-control" id="end_date" placeholder="Masukkan End Date" required>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Buat</button>
                  <button type="submit" class="btn btn-danger" data-dismiss="modal">Batal</button>
                </div>

                </div>
              </form>
            </div>
          </div>
        </div>
<!-- End Content edit modal -->

  <!-- Content edit modal -->
      <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title" id="modal-tambah">Edit Data Kuadran</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="editform">
              <div class="modal-body">
              {{csrf_field()}}
              {{method_field('PUT')}}

              <div class="form-group">
                <label for="id" class="col-form-label">Id:</label>
                <input name="id"  type="number" class="form-control" id="id"placeholder="Masukkan Id" required>
              </div>
              <div class="form-group">
                <label for="Kuadran" class="col-form-label">Nama Kuadran:</label>
                <input name="kuadran"  type="text" class="form-control" id="kuadran" placeholder="Masukkan Kuadran"  required>
              </div>
              <div class="form-group">
                <label for="start_date" class="col-form-label">Start Date:</label>
                <input name="start_date" type="datetime" class="form-control" id="start_date" placeholder="Masukkan Start Date"      required>
              </div>
              <div class="form-group" data-provide="datepicker">
                <label for="end_date" class="col-form-label">End Date:</label>
                <input name="end_date" type="datetime" class="form-control" id="end_date" placeholder="Masukkan End Date"  required>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Ubah</button>
                <button type="submit" class="btn btn-danger" data-dismiss="modal">Batal</button>
              </div>
              </div>
            </form>

          </div>
        </div>
      </div>
<!-- End Content edit modal -->

        <!-- Content table data -->
                <div class="row">
                  <div class="col-sm-3 col-md-9">
                    <div class="table-table responsive">
                      <table class="table table-bordered" id="table">

                          <tr>
                            <th scope="col"class="text-center">No</th>
                            <th scope="col"class="text-center">Id</th>
                            <th scope="col"class="text-center">Kuadran</th>
                            <th scope="col"class="text-center">Start Date</th>
                            <th scope="col"class="text-center">End Date</th>
                            <th scope="col"class="text-center">Aksi</th>
                          </tr>

                        <tbody>
                        @foreach ($kuadran as $kdr)
                          <tr>
                            <th scope="row" class="text-center">{{$loop-> iteration}}</th>
                            <td class="text-center">{{$kdr->id}}</td>
                            <td class="text-center">{{$kdr->kuadran}}</td>
                            <td class="text-center">{{$kdr->start_date}}</td>
                            <td class="text-center">{{$kdr->end_date}}</td>
                              <td class="text-center">
                                  <a href="kuadran.index.edit{{$kdr->id}}" class="btn btn-primary editbtn" class="text-center" data-toggle="modal" data-target="editmodal" data-whatever="@getbootstrap">edit</a>
                                  <a href="kuadran.index.destroy{{$kdr->id }}" class="btn btn-danger"class="text-center">delete</a>
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

<link rel="" href="/css/master.css">
  @endsection
