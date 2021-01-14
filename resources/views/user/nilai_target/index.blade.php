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


  </style>

<div ="container-fluid">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <h1>Input Nilai Kerja</h1>
          <hr class="sidebar-divider">
<div class="card">
  <div class="card-header">
    <div class="col-lg-12">

    </div>
  </div>
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
