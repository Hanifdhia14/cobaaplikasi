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
      <hr class="sidebar-divider">

      <div class="card">
        <div class="card-header">
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
            <h2 class="modal-title" id="exampleModalLabel">Tambah Hak Akses</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
  <form action="{{action('HakaksesController@store')}} "method="POST">
          {{csrf_field()}}

          <div class="form-group">
            <label for="nik" class="col-form-label">NIK:</label>
            <input name="nik" type="text" class="form-control @error('nik')is-invalid @enderror" id="nik" placeholder="Masukkan NIK" value="{{old('nik')}}">
            @error('nik')
              <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="name" class="col-form-label">Nama:</label>
            <input name="name"type="text" class="form-control @error('name')is-invalid @enderror" id="name" placeholder="Masukkan Nama Lengkap" value="{{old('name')}}">
            @error('name')
              <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="level" class="col-form-label">Level:</label>
            <select name="level" type="text" class="form-control @error('level')is-invalid @enderror" id="level" placeholder="Masukkan Level" value="{{old('level')}}">
                	<option>-Pilih-</option>
                  <option>Admin</option>
                  <option>User</option>
                  <option>Leader</option>
                </select>
            @error('level')
              <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="username" class="col-form-label"> Username:</label>
            <input name="username" type="text" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="Masukkan Username" value="{{old('username')}}">
            @error('username')
              <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="password" class="col-form-label">Password:</label>
            <input name="password"  class="form-control @error('password')is-invalid @enderror" id="Password"
            type="text" placeholder="Masukkan Password" value="{{old('password')}}">
            @error('password')
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
<!-- End Content tambah modal -->


<!-- Content Edit modal -->
@foreach ($hakak as $hk)
      <div class="modal fade" id="editmodal{{$hk->nik}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Edit Hak Akses</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
      <form action="{{action('HakaksesController@edit')}} "method="POST">
              {{csrf_field()}}

              <div class="form-group">
                <label for="nik" class="col-form-label">NIK:</label>
                <input name="nik" type="text" class="form-control @error('nik')is-invalid @enderror" id="nik" placeholder="Masukkan NIK" value="{{$hk->nik}}">
                @error('nik')
                  <div class="invalid-feedback">{{$message}}</div>
                @enderror
              </div>

              <div class="form-group">
                <label for="name" class="col-form-label">Nama:</label>
                <input name="name"type="text" class="form-control @error('name')is-invalid @enderror" id="name" placeholder="Masukkan Nama Lengkap" value="{{$hk->name}}">
                @error('name')
                  <div class="invalid-feedback">{{$message}}</div>
                @enderror
              </div>

              <div class="form-group">
                <label for="level" class="col-form-label">Level:</label>
                      <select name="level" type="text" class="form-control @error('level')is-invalid @enderror" id="level" placeholder="Masukkan Level">
                      	<option>{{$hk->level}}</option>
                        <option>Admin</option>
                        <option>User</option>
                        <option>Leader</option>
                      </select>
                @error('level')
                  <div class="invalid-feedback">{{$message}}</div>
                @enderror
              </div>

              <div class="form-group">
                <label for="username" class="col-form-label"> Username:</label>
                <input name="username" type="text" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="Masukkan Username" value="{{$hk->username}}">
                @error('username')
                  <div class="invalid-feedback">{{$message}}</div>
                @enderror
              </div>

              <div class="form-group">
                <label for="password" class="col-form-label">Password:</label>
                <input name="password"  class="form-control @error('password')is-invalid @enderror" id="Password"
                type="text" placeholder="Masukkan Password" value="{{$hk->password}}">
                @error('password')
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
@endforeach
<!-- End Content edit modal -->


        <table id="example" class="display" style="width:100%">
          <thead>
            <tr>
              <th >No</th>
              <th >NIK</th>
              <th >Nama</th>
              <th >Level</th>
              <th >Username</th>
              <th >Password</th>
              <th >Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($hakak as $hk)
              <tr>
                <td>{{$loop-> iteration}}</td>
                <td>{{$hk->nik}}</td>
                <td>{{$hk->name}}</td>
                <td>{{$hk->level}}</td>
                <th>{{$hk->username}}</th>
                <td>{{$hk->password}}</td>

                <td>
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#editmodal{{$hk->nik}}" data-whatever="@getbootstrap">Edit</a>
                    <a href="hakakses.index.destroy{{$hk->nik}}" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin mengapus data ?')">Delete</a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
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
