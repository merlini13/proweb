@extends('layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-8">
    <div class="contact-form">
      <h2 class="title text-center">Keterangan</h2>
      <div class="status alert alert-success" style="display: none"></div>
      @foreach($izin_keterangan as $keterangan)
      <form action="{{url('/comment-submit/'.$keterangan->izin_id)}}" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
        {{csrf_field()}}
            <div class="form-group col-md-6">
                <input type="text" name="user_message" class="form-control" placeholder="{{$keterangan->nama_pemrakarsa}}" disabled>
            </div>
            <div class="form-group col-md-12">
                <textarea name="content_message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
            </div>
            <div class="form-group col-md-12">
                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
            </div>
        </form>
        @endforeach
    </div>
  </div>

</div>
@endsection
