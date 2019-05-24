@extends('layout')
@section('admin_content')

<div class="box span12">
  <div class="box-header" data-original-title>
    <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Buat Matriks</h2>
  </div>
  <div class="box-content">
    <form class="form-horizontal" action="{{url('/save-update-matriks/'.$matriks_info->matriks_id)}}" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}
      <fieldset>


        <div class="control-group">
          <label class="control-label" for="date01">Jenis Usaha</label>
          <div class="controls">
          <input type="text" class="input-file uniform_on" name="jenis_usaha" >
          </div>
        </div>
        <br>
        <div class="control-group">
          <label class="control-label" for="fileInput">Dokumen Matriks</label>
          <div class="controls">
          <input class="input-file uniform_on" name="content" type="file">
          </div>
        </div>
        <br>

      <div class="form-actions">
        <button type="submit" class="btn btn-primary">Save changes</button>

        <button type="reset" class="btn">Cancel</button>
      </div>
      </fieldset>
    </form>

  </div>
</div>

@endsection
