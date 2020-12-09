@extends('layouts.master')


  @section('content')
  <style media="screen">
  h1{
    color: darkblue;
    margin-left: 20pt;
    font-style: article;
  }
  button{
    margin-bottom:10pt;
    margin-top: 20pt;
    margin-left: 50pt;

  }
  table{
    margin-top: 50pt;
  }

  </style>

<div ="container-fluid">

    <!-- Content Header (Page header) -->
        <h1>Tipe Penilaian <small>Imput Tipe Penilaian</small></h1>


              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Tambah</button>

              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Tipe Penilaian </h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <form method="POST" action="{{action('TipepenilaianController@store')}}">
              {{csrf_field()}}

              <div class="form-group">
                <label for="id" class="col-form-label">Id:</label>
                <input name="id"type="number" class="form-control" id="id">
              </div>
              <div class="form-group">
                <label for="tipe_penilaian" class="col-form-label">Tipe Penilaian:</label>
                <input name="tipe_penilaian"type="text" class="form-control" id="tipe_penilaian" placeholder="Masukkan Tipe Penilaian">
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
              <th >Id</th>
              <th >Tipe Penilaian</th>
              <th >Aksi</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($tipe_penilaian as $tp)
            <tr>
              <th >{{$loop->iteration}}</th>
              <td >{{$tp->id}}</td>
              <td >{{$tp->tipe_penilaian}}</td>
              <td >
                  <a href="" class="btn btn-primary"data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">edit</a>
                  <a href="tipe_penilaian.index.destroy{{$tp->id }}" class="btn btn-danger">delete</a>
              </td>
            </tr>
          @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th >No</th>
              <th >Id</th>
              <th >Tipe Penilaian</th>
              <th >Aksi</th>
            </tr>
          </tfoot>
        </table>


</div>

<script type="text/javascript">
$(document).ready(function() {
$('#example').DataTable( {
    "tipe_penilaian": "data/arrays.txt"
    } );
  } );

</script>
  @endsection
