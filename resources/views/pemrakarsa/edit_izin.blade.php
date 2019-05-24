@extends('pemrakarsa_layout')
@section('pemrakarsa_content')
<ul class="breadcrumb">
  <li>
    <i class="icon-home"></i>
    <a href="index.html">Dashboard</a>
    <i class="icon-angle-right"></i>
  </li>
  <li>
    <i class="icon-edit"></i>
    <a href="#">Buat Sppl</a>
  </li>
</ul>

<div class="row-fluid sortable">
  <div class="box span12">
    <div class="box-header" data-original-title>
      <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Edit SPPL</h2>
    </div>
    <div class="box-content">
      <form class="form-horizontal" action="{{url('/update-data-sppl/'.$izin_info->izin_id)}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <fieldset>


          <div class="control-group">
            <label class="control-label" for="date01">Nama Pemrakarsa</label>
            <div class="controls">

            <input type="text" class="input-file uniform_on" name="nama_pemrakarsa"  value="{{Session::get('nama_pemrakarsa')}}" readonly>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="date01">No KTP</label>
            <div class="controls">
            <input type="text" class="input-file uniform_on" name="no_ktp" required="" value="{{Session::get('no_ktp')}}" readonly>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="date01">Nama Usaha</label>
            <div class="controls">
            <input type="text" class="input-xlarge" name="nama_usaha" required="" placeholder="{{$izin_info->nama_usaha}}">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="date01">Alamat</label>
            <div class="controls">
            <input type="text" class="input-xlarge" name="alamat_usaha" required="" placeholder="{{$izin_info->alamat_usaha}}">
            </div>
          </div>

          <div class="control-group">
          <label class="control-label" for="selectError3">Jenis Usaha</label>
          <div class="controls">
            <select id="selectError3" name="jenis_usaha">
            <option>Rumah Makan</option>
            <option>Toko Bangunan</option>
            <option>Fotokopian</option>
            </select>
          </div>
          </div>

          <div class="control-group">
          <label class="control-label" for="selectError3">Tahap Usaha</label>
          <div class="controls">
            <select id="selectError3" name="tahap">
            <option>Pra Konstruksi</option>
            <option>Konstruksi</option>
            <option>Operasional</option>
            </select>
          </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="fileInput">Fotocopy SPPL</label>
            <div class="controls">
            <input class="input-file uniform_on" name="sppl" type="file">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="fileInput">Tabel Rencana</label>
            <div class="controls">
            <input class="input-file uniform_on" name="rencana" type="file">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="fileInput">Fotocopy KTP</label>
            <div class="controls">
            <input class="input-file uniform_on" name="fotocopyktp" type="file">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="fileInput">Foto Lokasi</label>
            <div class="controls">
            <input class="input-file uniform_on" name="fotolokasi" type="file">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="fileInput">Fotocopy IMB</label>
            <div class="controls">
            <input class="input-file uniform_on" name="fotocopyimb" type="file">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="fileInput">Fotocopy Sertifikat Tanah</label>
            <div class="controls">
            <input class="input-file uniform_on" name="fotocopysertifikattanah" type="file">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="fileInput">Fotocopy Bukti Pembayaran PBB</label>
            <div class="controls">
            <input class="input-file uniform_on" name="fotocopybuktipembayaranpbb" type="file">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="fileInput">Gambar Bangunan yg Diajukan</label>
            <div class="controls">
            <input class="input-file uniform_on" name="gambarbangunan" type="file">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="fileInput">Gambar Area Parkir dan Penghijauan</label>
            <div class="controls">
            <input class="input-file uniform_on" name="areaparkir" type="file">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="fileInput">Denah Lokasi</label>
            <div class="controls">
            <input class="input-file uniform_on" name="denahlokasi" type="file">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="fileInput">Dokumentasi Grease Trap</label>
            <div class="controls">
            <input class="input-file uniform_on" name="greasetrap" type="file">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="fileInput">Akta Pendirian PT/CV</label>
            <div class="controls">
            <input class="input-file uniform_on" name="aktapendiriancv" type="file">
            </div>
          </div>

        <div class="form-actions">
          <button type="submit" class="btn btn-primary">Save changes</button>
          <button type="reset" class="btn">Cancel</button>
        </div>
        </fieldset>
      </form>

    </div>
  </div><!--/span-->
</div>
@endsection
