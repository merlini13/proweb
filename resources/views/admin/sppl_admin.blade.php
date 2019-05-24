@extends('layout')
@section('admin_content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Perizinan</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Izin SPPL</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nama Pemrakarsa</th>
            <th>Nama Usaha</th>
            <th>Alamat</th>
            
            <th>Status</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        @foreach($admin_all_izin as $admin_izin)
        <tbody>
          <tr>
            <td class="center">{{$admin_izin->nama_pemrakarsa}}</td>
            <td class="center">{{$admin_izin->nama_usaha}}</td>
            <td class="center">{{$admin_izin->alamat_usaha}}</td>
            <td class="center">
              @if($admin_izin->status_publikasi==1)
              <span class="label label-success">Complete</span>
              @else
              <span class="label label-danger">On Progress..</span>
              @endif
            </td>
            <td class="center">{{$admin_izin->keterangan}}</td>
            <td class="center"><a href="{{URL::to('/detail-izin/'.$admin_izin->izin_id)}}">Lihat Detail</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection
