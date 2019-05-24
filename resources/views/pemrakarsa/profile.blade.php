@extends('pemrakarsa_layout')
@section('pemrakarsa_content')
<ul class="breadcrumb">
  <li>
    <i class="icon-home"></i>
    <a href="{{URL::to('/')}}">Dashboard</a>
</ul>
  <div class="box-content">
      <div class="row">
  		<div class="col-sm-10"><h1>Profil User</h1></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
        </div><!--/col-3-->
    	<div class="col-sm-9">

          <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a href="#home" data-toggle="tab">Data Pemrakarsa</a></li>
            <li><a href="#messages" data-toggle="tab">Pengajuan Perizinan</a></li>
          </ul>

          <div class="tab-content">
            <div class="tab-pane active" id="home">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <?php $id=Session::get('id');?>
                  <tr>
                    <th>Nomor KTP</th>
                    <td>{{Session::get('no_ktp')}}</td>
                  </tr>
                    <tr>
                      <th>Nama Pemrakarsa</th>
                      <td>{{Session::get('nama_pemrakarsa')}}</td>
                    </tr>
                    <tr>
                      <th>Jabatan</th>
                      <td>{{Session::get('jabatan')}}</td>
                    </tr>
                    <tr>
                      <th>Alamat</th>
                      <td>{{Session::get('alamat')}}</td>
                    </tr>
                    <tr>
                      <th>Nomor Telepon</th>
                      <td>{{Session::get('no_telp')}}</td>
                    </tr>
                </table>
                <hr>
                <div class="row">
                  <div class="col-md-4 col-md-offset-4 text-center">
                  	<ul class="pagination" id="myPager"></ul>
                  </div>
                </div>
              </div><!--/table-resp-->
              <hr>
             </div><!--/tab-pane-->
             <div class="tab-pane" id="messages">

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
                 <tbody>
                   @foreach($profile as $detail)
                   <tr>
                     <td class="center">{{$detail->nama_pemrakarsa}}</td>
                     <td class="center">{{$detail->nama_usaha}}</td>
                     <td class="center">{{$detail->alamat_usaha}}</td>
                     <td class="center">
                       @if($detail->status_publikasi==1)
                       <span class="label label-success">Complete</span>
                       @else
                       <span class="label label-danger">On Progress..</span>
                       @endif
                     </td>
                     <td class="center">{{$detail->keterangan}}</td>
                     <td class="center">
                       <a href="{{URL::to('/detail-izin-profile/'.$detail->izin_id)}}">Lihat Detail</a>
                     </td>
                   </tr>
                    @endforeach
                 </tbody>

               </table>

             </div><!--/tab-pane-->


              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div>


@endsection
