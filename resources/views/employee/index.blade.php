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
        <h1>Employee <small>Imput Employee</small></h1>


              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Tambah</button>

              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Tambah Employee</h2>
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
                <label for="nama" class="col-form-label">Nama Lengkap:</label>
                <input name="nama"type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap" required>
              </div>
              <div class="form-group">
                <label for="level" class="col-form-label">Level:</label>
                <textarea name="level" class="form-control" id="Level" placeholder="Masukkan Level"required></textarea>
              </div>
              <div class="form-group">
                <label for="jabatan" class="col-form-label">Jabatan:</label>
                <input name="jabatan"type="text" class="form-control" id="jabatan" placeholder="Masukkan jabatan" required>
              </div>
              <div class="form-group">
                <label for="unit_kerja" class="col-form-label">Unit Kerja:</label>
                <input name="unit_kerja" type="text" class="form-control" id="unit_kerja" placeholder="Masukkan Unit Kerja" required>
              </div>
              <div class="form-group">
                <label for="wilayah" class="col-form-label">Wilayah:</label>
                <input name="wilayah"type="text" class="form-control" id="wilayah" placeholder="Masukkan Wilayah" required>
              </div>
              <div class="form-group">
                <label for="email"class="col-form-label">Email:</label>
                <input name="email"type="text" class="form-control" id="email" placeholder="Masukkan Email" required>
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
                  <th scope="col" class="text-center">NIK</th>
                  <th scope="col" class="text-center">Nama Lengkap</th>
                  <th scope="col" class="text-center">Level</th>
                  <th scope="col"class="text-center" >Jabatan</th>
                  <th scope="col"class="text-center" >Unit Kerja</th>
                  <th scope="col"class="text-center" >Wilayah</th>
                  <th scope="col"class="text-center" >Email/th>
                  <th scope="col"class="text-center" >Aksi</th>
                </tr>
                </thead>
                <tbody>

                  <tr class="text-center">
                    <th scope="row" class=""></th>
                    <td class=""></td>
                    <td class=""></td>
                    <td class="col-sm-6"></td>
                    <td class=""></td>
                    <td class=""></td>
                    <td class=""></td>
                    <td class=""></td>
                    <td class="" >
                        <a href="" class="btn btn-primary"data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">edit</a>
                        <a href="" class="btn btn-danger">delete</a>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
      </div>
  </div>


</div>
  @endsection
