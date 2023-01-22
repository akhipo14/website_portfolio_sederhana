@extends('dashboards.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Lihat Pesan</h1>
</div>

<div class="row">
  <div class="col">
    <div class="mb-3 mt-3 col-lg-8">
        <label class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control "
        value="{{$pesans->nama}}" name="nama" disabled>
    </div>
    <div class="mb-3 mt-3 col-lg-8">
        <label class="form-label">No Hp</label>
        <input type="text" class="form-control "
        value="{{$pesans->no_hp}}" name="no_hp" disabled>
    </div>
    <div class="mb-3 mt-3 col-lg-8">
        <label class="form-label">Email</label>
        <input type="text" class="form-control "
        value="{{$pesans->email}}" name="email" disabled>
    </div>
    <div class="mb-3 col col-lg-8">
      <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
      <p>{!!$pesans->pesan!!}</p>
    </div>
<a href="/pesan-dashboard" class="btn btn-secondary mb-3">Kembali</a>
  </div>
</div>
@endsection
