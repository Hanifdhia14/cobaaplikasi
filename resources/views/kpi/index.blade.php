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

<div ="container-fluid">

    <!-- Content Header (Page header) -->
        <h1>KPI <small>Imput Nama KPI</small></h1>
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
            <h2 class="modal-title" id="exampleModalLabel">Tambah KPI</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{action('KpiController@store')}}" >
          {{csrf_field()}}

          <div class="form-group">
            <label for="kode_kpi" class="col-form-label">Kode KPI:</label>
            <input name="kode_kpi" type="text" class="form-control @error('kode_kpi')is-invalid @enderror" id="kode_kpi" placeholder="Masukkan Kode" value="{{old('kode_kpi')}}">
            @error('kode_kpi')
              <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="nama_kpi" class="col-form-label">Nama KPI:</label>
            <input name="nama_kpi"type="text" class="form-control @error('nama_kpi')is-invalid @enderror" id="nama_kpi" placeholder="Masukkan Nama KPI" value="{{old('nama_kpi')}}">
            @error('nama_kpi')
              <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="description" class="col-form-label">Description:</label>
              <input name="description"type="text" class="form-control @error('description')is-invalid @enderror" id="description" placeholder="Masukkan Description" value="{{old('description')}}">
              @error('description')
                <div class="invalid-feedback">{{$message}}</div>
              @enderror
          </div>

          <div class="form-group">
            <label for="polaritas" class="col-form-label">Polaritas:</label>
            <select name="polaritas" type="text" class="form-control @error('polaritas')is-invalid @enderror" id="polaritas" placeholder="Masukkan Polaritas" value="{{old('Polaritas')}}">
                 <option>-Pilih-</option>
                 <option>+</option>
                 <option>-</option>
            </select>
            @error('polaritas')
              <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="parameter" class="col-form-label">Parameter:</label>
            <input name="parameter" type="text" class="form-control @error('parameter')is-invalid @enderror" id="parameter" placeholder="Masukkan Parameter" value="{{old('parameter')}}">
            @error('parameter')
              <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="start_date" class="col-form-label">Start Date:</label>
            <input name="start_date"type="date" class="form-control @error('start_date')is-invalid @enderror" id="kpi" placeholder="Masukkan Start Date" value="{{old('start_date')}}">
            @error('start_date')
              <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="end_date" class="col-form-label">End Date:</label>
            <input name="end_date"type="date" class="form-control @error('end_date')is-invalid @enderror" id="kpi" placeholder="Masukkan End Date" value="{{old('end_date')}}">
            @error('end_date')
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
<!-- End Content Tambah modal -->


<!-- Content Edit modal -->
@foreach($kpi as $kp)
<div class="modal fade" id="edit{{$kp->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Edit KPI</h2>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

    <div class="modal-body">
    <form method="POST" action="{{action('KpiController@edit')}}" id="editform">
      {{csrf_field()}}

      <div class="form-group">
        <label for="kode_kpi" class="col-form-label">Kode KPI:</label>
        <input name="kode_kpi" type="text" class="form-control @error('kode_kpi')is-invalid @enderror" id="kode_kpi" placeholder="Masukkan Id" value="{{$kp->kode_kpi}}">
      </div>

      <div class="form-group">
        <label for="nama_kpi" class="col-form-label">Nama KPI:</label>
        <input name="nama_kpi"type="text" class="form-control @error('nama_kpi')is-invalid @enderror" id="nama_kpi" placeholder="Masukkan Nama KPI" value="{{$kp->nama_kpi}}">
      </div>

      <div class="form-group">
        <label for="description" class="col-form-label">Description:</label>
          <input name="description"type="text" class="form-control @error('description')is-invalid @enderror" id="description" placeholder="Masukkan Description" value="{{$kp->description}}">
      </div>

      <div class="form-group">
        <label for="polaritas" class="col-form-label">Polaritas:</label>
        <select name="polaritas" type="text" class="form-control @error('polaritas')is-invalid @enderror" id="polaritas" placeholder="Masukkan Polaritas" value="{{old('Polaritas')}}">
             <option>{{$kp->polaritas}}</option>
             <option>+</option>
             <option>-</option>
        </select>
      </div>

      <div class="form-group">
        <label for="parameter" class="col-form-label">Parameter:</label>
        <input name="parameter" type="text" class="form-control @error('parameter')is-invalid @enderror" id="parameter" placeholder="Masukkan Parameter" value="{{$kp->parameter}}">
      </div>

      <div class="form-group">
        <label for="start_date" class="col-form-label">Start Date:</label>
        <input name="start_date" type="date" class="form-control @error('start_date')is-invalid @enderror" id="kpi" placeholder="Masukkan Start Date" value="{{$kp->start_date}}">
      </div>

      <div class="form-group">
        <label for="end_date" class="col-form-label">End Date:</label>
        <input name="end_date" type="date" class="form-control @error('end_date')is-invalid @enderror" id="kpi" placeholder="Masukkan End Date" value="{{$kp->end_date}}">
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Ubah</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
      </div>
    </form>
    </div>
</div>
</div>
</div>
@endforeach
<!-- End Content Edit modal -->

  <table id="example" class="display" style="width:100%;">
      <thead >
          <tr>
              <th>No</th>
              <th>Kode KPI</th>
              <th>Nama KPI</th>
              <th>Deskripsi</th>
              <th>Polaritas</th>
              <th>Parameter</th>
              <th>Start Date</th>
              <th>End Date</th>
              <th>Aksi</th>
          </tr>
      </thead>

      <tbody>
      @foreach ($kpi as $kp)
        <tr>
          <td>{{$loop-> iteration}}</td>
          <td>{{$kp ->kode_kpi}}</td>
          <td>{{$kp ->nama_kpi}}</td>
          <td>{{$kp ->description}}</td>
          <td>{{$kp ->polaritas}}</td>
          <td>{{$kp ->parameter}}</td>
          <td>{{$kp ->start_date}}</td>
          <td>{{$kp ->end_date}}</td>
          <td >
              <a class="btn btn-primary"data-toggle="modal" data-target="#edit{{$kp->id}}" data-whatever="@getbootstrap">Edit</a>
              <a href="kpi.index.destroy{{$kp->id }}" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin mengapus data ?')">Delete</a>
          </td>
        </tr>
      @endforeach

      </tbody>
      <tfoot>
          <tr>
            <th>Kode KPI</th>
            <th>Nama KPI</th>
            <th>Deskripsi</th>
            <th>Polaritas</th>
            <th>Parameter</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Aksi</th>
          </tr>
      </tfoot>
  </table>

        </div>

      </div>

</div

>

<script type="text/javascript">
$(document).ready(function() {
$('#example').DataTable( {
    } );
  } );

</script>

  @endsection
