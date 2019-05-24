@extends('layout')
@section('admin_content')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container emp-profile">
                <form method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="profile-head">
                                        <h5>
                                          Formulir Perizinan SPPL
                                        </h5>

                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile Pemrakarsa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Izin Usaha</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    @foreach($izin_by_details as $izin_detail)
                                    <tr>
                                      <th>Nomor KTP</th>
                                      <td>@isset($izin_detail->no_ktp)
                                        {{$izin_detail->no_ktp}}
                                      @endisset</td>
                                    </tr>
                                      <tr>
                                        <th>Nama Pemrakarsa</th>
                                        <td>@isset($izin_detail->nama_pemrakarsa)
                                          {{$izin_detail->nama_pemrakarsa}}
                                        @endisset</td>
                                      </tr>
                                      <tr>
                                        <th>Nama Pemrakarsa</th>
                                        <td>@isset($izin_detail->jabatan)
                                          {{$izin_detail->jabatan}}
                                        @endisset</td>
                                      </tr>
                                      <tr>
                                        <th>Alamat</th>
                                        <td>@isset($izin_detail->alamat)
                                          {{$izin_detail->alamat_usaha}}
                                        @endisset</td>
                                      </tr>
                                    @endforeach
                                  </table>

                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    @foreach($izin_by_details as $izin_detail)
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

                                  </table>
                                  @if($izin_detail->status_publikasi==0)
                                  <a href="{{URL::to('/accept/'.$izin_detail->izin_id)}}" class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-50">
                                      <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Terima Izin</span>
                                  </a>
                                  @else
                                  <a href="{{URL::to('/not-accept/'.$izin_detail->izin_id)}}" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                      <i class="fas fa-times"></i>
                                    </span>
                                    <span class="text">Batal Terima Izin</span>
                                  </a>
                                  @endif
                                  <a href="{{URL::to('/comment/'.$izin_detail->izin_id)}}" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                      <i class="fas fa-comment"></i>
                                    </span>
                                    <span class="text">Beri Keterangan</span>
                                  </a>
                                  @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
@endsection
