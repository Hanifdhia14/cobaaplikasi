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


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <h1>Hak Akses <small>Imput Hak Akses</small></h1>


              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Tambah</button>

              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Tambah Hak Akses</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="" >

              <div class="form-group">
                <label for="nik" class="col-form-label">NIK:</label>
                <input name="nik"type="number" class="form-control" id="nik" placeholder="Masukkan NIK" required>
              </div>
            <form>
              <div class="form-group">
                <label for="nama" class="col-form-label">Nama:</label>
                <input name="nama"type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap" required>
              </div>
              <div class="form-group">
                <label for="username" class="col-form-label">Username:</label>
                <input name="username" class="form-control" id="username" placeholder="Masukkan Username"required>
              </div>
              <div class="form-group">
                <label for="pasword" class="col-form-label">Pasword:</label>
                <input name="pasword"type="text" class="form-control" id="Pasword" placeholder="Masukkan pasword" required>
              </div>
              <div class="form-group">
                <label for="role" class="col-form-label">Role:</label>
                <input name="role" type="text" class="form-control" id="role" placeholder="Masukkan Unit Kerja" required>
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


            <table id="example" class="display" style="width:100%">
              <thead>
                <tr>
                  <th >No</th>
                  <th >NIK</th>
                  <th >Nama</th>
                  <th >Username</th>
                  <th >pasword</th>
                  <th >Role</th>
                  <th >Aksi</th>
                </tr>
                </thead>
                <tbody>

                  <tr>
                    <th ></th>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td>
                        <a href="" class="btn btn-primary"data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">edit</a>
                        <a href="" class="btn btn-danger">delete</a>
                    </td>
                  </tr>

                </tbody>
              </table>

  </div>


<script type="text/javascript">
$(document).ready(function() {
$('#example').DataTable( {
    } );
  } );
</script>
  @endsection
