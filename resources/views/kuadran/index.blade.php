@extends('layouts.master')


  @section('content')
  <style media="screen">
    h1{
      color: darkblue;
      margin-left: 20pt;
      font-style: article;
    }
    button{
      margin-top:10pt;
      margin-bottom: 20pt;
      margin-left: 50pt;

    }
    table{
      margin-top: 80pt;
      margin-left: 100pt;
      margin-right: 30pt;
    }


  </style>


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

                      <table id="example" class="display" style="width:100%">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Id</th>
                            <th>Kuadran</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>

                        <tbody>
                        @foreach ($kuadran as $kdr)
                          <tr>
                            <td >{{$loop-> iteration}}</th>
                            <td >{{$kdr->id}}</td>
                            <td >{{$kdr->kuadran}}</td>
                            <td >{{$kdr->start_date}}</td>
                            <td >{{$kdr->end_date}}</td>
                            <td >
                                  <a href="kuadran.index.edit{{$kdr->id}}" class="btn btn-primary editbtn" class="text-center" data-toggle="modal" data-target="editmodal" data-whatever="@getbootstrap">edit</a>
                                  <a href="kuadran.index.destroy{{$kdr->id }}" class="btn btn-danger"class="text-center">delete</a>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Id</th>
                                <th>Kuadran</th>
                                <th>Start date</th>
                                <th>End date</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                      </table>




      </div>


<link rel="" href="/css/master.css">
  @endsection
