@extends('layouts.master')


  @section('content')
  <style media="screen">
  h1{
    color: darkblue;
    margin-left: 20pt;
    font-style: article;
  }
  button{
    margin-bottom: 20pt;
    margin-top: 20pt;
    margin-left: 50pt;

  }
  table{
    margin-top: 50pt;
  }

  </style>

<div ="container-fluid">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <h1>Satuan <small>Imput Nama Satuan</small></h1>


              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Tambah</button>

              @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
              @endif

<!-- Content tambah modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Tambah Tipe Satuan</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{action('SatuanController@store')}}" >
              {{csrf_field()}}

            <div class="form-group">
              <label for="id" class="col-form-label">Id:</label>
              <input name="id" type="number" class="form-control  @error('id')is-invalid @enderror" id="id" placeholder="Masukkan Id" value="{{old('id')}}">
              @error('id')
                <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>

              <div class="form-group">
                <label for="satuan" class="col-form-label">Tipe Satuan:</label>
                <input name="satuan" type="text" class="form-control @error('satuan')is-invalid @enderror" id="satuan" placeholder="Masukkan Satuan" value="{{old('satuan')}}">
                @error('satuan')
                  <div class="invalid-feedback">{{$message}}</div>
                @enderror
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
<!-- Content Edit modal -->
@foreach ($satuan as $stn)
<div class="modal fade" id="editModal-{{$stn->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLabel">Tambah Tipe Satuan</h2>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="POST" action="{{action('SatuanController@edit')}}" >
        {{csrf_field()}}

      <div class="form-group">
        <label for="id" class="col-form-label">Id:</label>
        <input name="id" type="number" class="form-control @error('id')is-invalid @enderror" id="id" placeholder="Masukkan Id" value="{{$stn->id}}">
      </div>

      <div class="form-group">
        <label for="satuan" class="col-form-label">Tipe Satuan:</label>
        <input name="satuan" type="text" class="form-control @error('id')is-invalid @enderror " id="satuan" placeholder="Masukkan Satuan" value="{{$stn->satuan}}" >
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
@endforeach
<!-- End Content Edit modal -->



          <table id="example" class="display" style="width:100%">

          <thead>
            <tr>
              <th >No</th>
              <th >Id</th>
              <th >Satuan</th>
              <th >Aksi</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($satuan as $stn)
            <tr>
              <th >{{$loop-> iteration}}</th>
              <td >{{$stn->id}}</td>
              <td >{{$stn->satuan}}</td>
              <td >
                  <a href="" class="btn btn-primary"data-toggle="modal" data-target="#editModal-{{$stn->id}}" data-whatever="@getbootstrap">Edit</a>
                  <a href="satuan.index.destroy{{$stn->id }}" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</a>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>

  </div>


</div>

<script type="text/javascript">
$(document).ready(function() {
$('#example').DataTable( {
    } );
  } );

</script>
  @endsection
