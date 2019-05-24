@extends('pemrakarsa_layout')
@section('pemrakarsa_content')

<ul class="breadcrumb">
  <li>
    <i class="icon-home"></i>
    <a href="{{URL::to('/')}}">Dashboard</a>
    <i class="icon-angle-right"></i>
  </li>
  <li><a href="#">Download</a></li>
</ul>

<div class="row-fluid sortable">
  <div class="box span12">
    <div class="box-header">
      <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Download Berkas</h2>
    </div>
    <div class="box-content">
      <table class="table table-bordered table-striped table-condensed">
          <thead>
            <tr>
              <th>Nama Berkas</th>
              <th>Link</th>
            </tr>
          </thead>
          <tbody>
            @foreach($download as $dl)
          <tr>
            <td>Berkas A</td>
            <td class="center"><a href="#">Berkas A</a></td>
          </tr>
          <tr>
            <td>Berkas B</td>
            <td class="center"><a href="#">Berkas B</a></td>
          </tr>
          <tr>
            <td>Matriks</td>
            <td class="center"><a href="{{URL::to('/download-berkas/'.$dl->content)}}">@isset($dl->jenis_usaha)
              {{$dl->jenis_usaha}}
            @endisset</a>
            </td>
          </tr>
          @endforeach
        </tbody>
        </table>
      </div>
    </div>
  </div><!--/span-->
</div><!--/row-->


@endsection
