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
    margin-top: 50pt;
  }

  </style>

<div ="container-fluid">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <h1>Document <small>Imput Jenis Document</small></h1>


              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Tambah</button>

              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Tambah Document</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{action('DocumentController@store')}}" >
              {{csrf_field()}}

              <div class="form-group">
                <label for="id" class="col-form-label">Id:</label>
                <input name="id" type="number" class="form-control" id="id"placeholder="Masukkan Id">
              </div>
              <div class="form-group">
                <label for="document" class="col-form-label">Nama Document:</label>
                <input name="document" type="text" class="form-control" id="document" placeholder="Masukkan document">
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

      <div class="container">
        <table class="table">

          <thead>
            <tr>
              <th scope="col"class="text-center">No</th>
              <th scope="col"class="text-center">Id</th>
              <th scope="col"class="text-center">Document</th>
              <th scope="col"class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
          @foreach($document as $dcm)
            <tr>
              <th scope="row"class="text-center">{{$loop->iteration}}</th>
              <td class="text-center">{{$dcm->id}}</td>
              <td class="text-center">{{$dcm->document}}</td>
                <td class="text-center">
                    <a href="" class="btn btn-primary"class="text-center" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">edit</a>
                    <a href="document.index.destroy{{$dcm->id }}" class="btn btn-danger"class="text-center">delete</a>
                </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
  </div>


</div>
  @endsection
