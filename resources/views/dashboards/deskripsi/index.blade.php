@extends('dashboards.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Deskripsi Profil</h1>
</div>
<a href="/deskripsi-dashboard/{{$deskripsis[0]->id }}/edit" class="btn btn-secondary btn-sm mb-3">Update Deskripsi Profil</a>

<table class="table table-bordered">
  <tr>
    <th>No</th>
    <th>Tentang Saya</th>
    <th>Riwayat pendidikan</th>
    <th>Pengalaman Kerja</th>
  </tr>
  @foreach($deskripsis as $deskripsi)
  <tr>
    <td>{{ $loop->iteration}}</td>
    <td>{!! $deskripsi->tentang !!}</td>
    <td>{!! $deskripsi->Pendidikan!!}</td>
    <td>{!!$deskripsi->pengalaman_kerja!!}</td>

  @endforeach

  </tr>
</table>
<!-- <div class="row">
  <div class="col col-lg-8">
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label"><h5>Tentang Saya</h5></label>
      <p>{!! $deskripsis[0]->tentang !!}</p>
    </div>
  </div>
  <div class="col col-lg-8">
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Riwayat Pendidikan</label>
      <p>{!! $deskripsis[0]->Pendidikan !!}</p>
    </div>
  </div>
  <div class="col col-lg-8">
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Pengalaman Kerja</label>
      <p>{!! $deskripsis[0]->pengalaman_kerja !!}</p>
    </div>
    <a class="btn btn-secondary mb-3"href="/deskripsi-dashboard/{{$deskripsis[0]->id}}/edit">Edit Deskripsi Profil</a>

  </div>

</div> -->

@endsection
