@extends('layout')
@section('admin_content')
<h1 class="h3 mb-2 text-gray-800">Matriks Penilaian</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">List Matriks</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Matriks ID</th>
            <th>Jenis Usaha</th>
            <th>Aksi</th>
          </tr>
        </thead>
        @foreach($all_matriks as $matriks)
        <tbody>
          <tr>
            <td class="center">{{$matriks->matriks_id}}</td>
            <td class="center">{{$matriks->jenis_usaha}}</td>
            <td class="center"><a href="{{URL::to('/update-matriks-page/'.$matriks->matriks_id)}}">Update Matriks</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
@endsection
