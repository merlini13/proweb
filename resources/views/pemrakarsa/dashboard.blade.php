@extends('pemrakarsa_layout')
@section('pemrakarsa_content')

<ul class="breadcrumb">
  <li>
    <i class="icon-home"></i>
    <a href="{{URL::to('/')}}">Dashboard</a>

</ul>

<div class="row-fluid sortable">
  <div class="box span12">
    <div class="box-header" data-original-title>
      <h2><i class="halflings-icon user"></i><span class="break"></span>Daftar Usaha</h2>
    </div>
    <div class="box-content">
      <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
          <tr>
            <th>Nama Usaha</th>
            <th>Nama Pemilik</th>
            <th>Alamat</th>
            <th>Status</th>
          </tr>
        </thead>
        @foreach($all_izin as $izin)
        <tbody>
          <tr>
            <td class="center">{{$izin->nama_usaha}}</td>
            <td class="center">{{$izin->nama_pemrakarsa}}</td>
            <td class="center">{{$izin->alamat_usaha}}</td>
            <td class="center">@if($izin->status_publikasi==1)
            <span class="label label-success">Complete</span>
            @else
            <span class="label label-danger">On Progress..</span>
            @endif
          </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div><!--/span-->

</div><!--/row-->
@endsection
