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


  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
        <h1>Master Kuadran <small> Imput Nama Kuadran</small> </h1>
        <hr class="sidebar-divider">
    <div class="card">
      <div class="card-header">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Tambah</button>
        <!-- Search form -->
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

                <h2 class="modal-title" id="modal-tambah">Tambah Kuadran</h2>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>

              <form method="POST" action="{{action('KuadranController@store')}}">
                <div class="modal-body">
                {{csrf_field()}}

                <div class="form-group">
                  <label for="id" class="col-form-label">Id:</label>
                  <input name="id"  type="text" class="form-control @error('id')is-invalid @enderror" id="id" placeholder="Masukkan Id" value="{{old('id')}}">
                  @error('id')
                    <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="Kuadran" class="col-form-label">Nama Kuadran:</label>
                  <input name="kuadran"  type="text" class="form-control @error('kuadran')is-invalid @enderror" id="kuadran" placeholder="Masukkan Kuadran"  value="{{old('kuadran')}}">
                  @error('kuadran')
                    <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>

                <div class="form-group date">
                  <label for="start_date" class="col-form-label">Start Date:</label>
                  <input name="start_date" type="text" class="form-control" id="tgl">
                </div>

                <div class="form-group">
                  <label for="end_date" class="col-form-label">End Date:</label>
                  <input name="end_date" type="text" class="form-control @error('end_date')is-invalid @enderror " id="tgl" placeholder="Masukkan End Date" value="{{old('end_date')}}">
                  @error('end_date')
                    <div class="invalid-feedback">{{$message}}</div>
                  @enderror
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
  <!-- End Content Tambah modal -->

  <!-- Content edit modal -->
    @foreach ($kuadran as $kdr)
      <div class="modal fade" id="edit-{{$kdr->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title" id="modal-tambah">Edit Kuadran</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{action('KuadranController@edit')}}" method="POST" id="editform">
              {{csrf_field()}}

            <div class="modal-body">
              <div class="form-group">
                <label for="id" class="col-form-label">Id:</label>
                <input name="id"  type="text" class="form-control" id ="id" placeholder="Masukkan Id" value="{{$kdr->id}}">
              </div>

              <div class="form-group">
                <label for="Kuadran" class="col-form-label">Nama Kuadran:</label>
                <input name="kuadran"  type="text" class="form-control" id="kuadran" placeholder="Masukkan Kuadran"value="{{$kdr->kuadran}}">
              </div>

              <div class="form-group">
                <label for="start_date" class="col-form-label">Start Date:</label>
                <input name="start_date" type="datetime" class="form-control" id="datepicker" placeholder="Masukkan Start Date" value="{{$kdr->start_date}}">
              </div>

              <div class="form-group" data-provide="datepicker">
                <label for="end_date" class="col-form-label">End Date:</label>
                <input name="end_date" type="datetime" class="form-control" id="datepicker" placeholder="Masukkan End Date" value="{{$kdr->end_date}}">
              </div>

              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Ubah Data</button>
                <button type="submit" class="btn btn-danger" data-dismiss="modal">Batal</button>
              </div>
              </div>
            </form>

          </div>
        </div>
      </div>
      @endforeach
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
                            <td >{{$kdr ->id}}</td>
                            <td >{{$kdr ->kuadran}}</td>
                            <td >{{$kdr ->start_date}}</td>
                            <td >{{$kdr ->end_date}}</td>
                            <td >
                                  <a class="btn btn-primary" data-toggle="modal" data-target="#edit-{{$kdr->id}}">edit</a>
                                  <a href="kuadran.index.destroy{{$kdr->id }}" class="btn btn-danger" class="text-center" onclick="return confirm('Apakah anda yakin ingin mengapus data ?')">delete</a>
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

    </div>

  </div>

<script type="text/javascript">
$(document).ready(function() {
$('#example').DataTable( {
    } );
  } );

</script>




@endsection
