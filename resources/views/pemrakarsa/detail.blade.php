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
        @foreach($detail as $izin_detail)
        <tr>
          <th>Keterangan Staff</th>
          <td>@isset($izin_detail->keterangan)
          {{$izin_detail->keterangan}}
        @endisset</td>
        </tr>
        <tr>
          <th>Nama Usaha</th>
          <td>@isset($izin_detail->nama_usaha)
            {{$izin_detail->nama_usaha}}
          @endisset</td>
        </tr>
        <tr>
          <th>Alamat Usaha</th>
          <td>@isset($izin_detail->alamat_usaha)
            {{$izin_detail->alamat_usaha}}
          @endisset</td>
        </tr>
          <tr>
            <th>Jenis Usaha</th>
            <td>@isset($izin_detail->jenis_usaha)
              {{$izin_detail->jenis_usaha}}
            @endisset</td>
          </tr>
          <tr>
            <th>Tahap</th>
            <td>@isset($izin_detail->tahap)
              {{$izin_detail->tahap}}
            @endisset</td>
          </tr>
          <tr>
            <th>Berkas SPPL</th>
            <td><a href="{{URL::to('/download-sppl/'.$izin_detail->sppl)}}">@isset($izin_detail->sppl)
            {{$izin_detail->sppl}}
          @endisset<a></td>
          </tr>
          <tr>
            <th>Tabel Rencana</th>
            <td><a href="{{URL::to('/download-rencana/'.$izin_detail->rencana)}}">@isset($izin_detail->rencana)
            {{$izin_detail->rencana}}
          @endisset</td>
          </tr>
          <tr>
            <th>Fotocopy KTP</th>
            <td><a href="{{URL::to('/download-fotocopyktp/'.$izin_detail->fotocopyktp)}}">@isset($izin_detail->fotocopyktp)
            {{$izin_detail->fotocopyktp}}
          @endisset</td>
          </tr>
          <tr>
            <th>Foto Lokasi</th>
            <td><a href="{{URL::to('/download-fotolokasi/'.$izin_detail->fotolokasi)}}">@isset($izin_detail->fotolokasi)
            {{$izin_detail->fotolokasi}}
          @endisset</td>
          </tr>
          <tr>
            <th>Fotocopy IMB</th>
            <td><a href="{{URL::to('/download-fotocopyimb/'.$izin_detail->fotocopyimb)}}">@isset($izin_detail->fotocopyimb)
            {{$izin_detail->fotocopyimb}}
          @endisset</td>
          </tr>
          <tr>
            <th>Fotocopy Sertifikat Tanah</th>
            <td><a href="{{URL::to('/download-fotocopysertifikattanah/'.$izin_detail->fotocopysertifikattanah)}}">@isset($izin_detail->fotocopysertifikattanah)
            {{$izin_detail->fotocopysertifikattanah}}
          @endisset</td>
          </tr>
          <tr>
            <th>Fotocopy Bukti Pembayaran PBB</th>
            <td><a href="{{URL::to('/download-fotocopybuktipembayaranpbb/'.$izin_detail->fotocopybuktipembayaranpbb)}}">@isset($izin_detail->fotocopybuktipembayaranpbb)
            {{$izin_detail->fotocopybuktipembayaranpbb}}
          @endisset</td>
          </tr>
          <tr>
            <th>Gambar Bangunan</th>
            <td><a href="{{URL::to('/download-gambarbangunan/'.$izin_detail->gambarbangunan)}}">@isset($izin_detail->gambarbangunan)
            {{$izin_detail->gambarbangunan}}
          @endisset</td>
          </tr>
          <tr>
            <th>Denah Parkir</th>
            <td><a href="{{URL::to('/download-areaparkir/'.$izin_detail->areaparkir)}}">@isset($izin_detail->areaparkir)
            {{$izin_detail->areaparkir}}
          @endisset</td>
          </tr>
          <tr>
            <th>Denah Lokasi</th>
            <td><a href="{{URL::to('/download-denahlokasi/'.$izin_detail->denahlokasi)}}">@isset($izin_detail->denahlokasi)
            {{$izin_detail->denahlokasi}}
          @endisset</td>
          </tr>
          <tr>
            <th>Foto Greasetrap</th>
            <td><a href="{{URL::to('/download-greasetrap/'.$izin_detail->greasetrap)}}">@isset($izin_detail->greasetrap)
            {{$izin_detail->greasetrap}}
          @endisset</td>
          </tr>
          <tr>
            <th>Akta Pendirian PT/CV</th>
            <td><a href="{{URL::to('/download-aktapendiriancv/'.$izin_detail->aktapendiriancv)}}">@isset($izin_detail->aktapendiriancv)
            {{$izin_detail->aktapendiriancv}}
          @endisset</td>
          </tr>
          @endforeach
      </table>
      @if($izin_detail->status_publikasi==1)
      <div class="form-actions">
        <button type="submit" onclick="window.location.href='{{URL::to('/edit-izin/'.$izin_detail->izin_id)}}'" class="btn btn-primary">Edit Data</button>
      </div>
      <div class="form-actions">
        <button type="submit" onclick="window.location.href='{{URL::to('/download/'.$izin_detail->izin_id)}}'" class="btn btn-primary">Download Berkas</button>
      </div>
      @else
      <div class="form-actions">
        <button type="submit" onclick="window.location.href='{{URL::to('/edit-izin/'.$izin_detail->izin_id)}}'" class="btn btn-primary">Edit Data</button>
      </div>
      @endif
    </div>
  </div><!--/span-->

</div><!--/row-->
@endsection
