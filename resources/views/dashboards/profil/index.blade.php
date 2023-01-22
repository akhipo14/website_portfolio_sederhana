@extends('dashboards.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Profil</h1>
</div>

@if (session()->has('pesan'))
  <div class="alert alert-success" role="alert">
    {{session('pesan')}}
  </div>
@endif

<div class="row">
    <div class="col">
    <form action="/profil-dashboard/{{$users[0]->id}}" method="post">
    @csrf
      <div class="row">
        <div class="col col-lg-4 mb-3">
          <label class="form-label">Foto Profi</label>
            <div class="d-flex justify-content-start ">
              @if($users[0]->profil_image)
              <img src="{{asset('storage/'.$users[0]->profil_image)}}" style="height:300px; width:300px;" class="img-preview  rounded border border-5 border-white shadow"alt="">
            @else
            <img src="/img/images.png" style="height:300px; width:300px;" class="img-preview  rounded border border-5 border-white shadow"alt="">
            @endif
            </div>
        </div>
        <div class="col col-lg-8">
          <div class="mb-3 mt-3 col-lg-8">
              <label class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control "
              value="{{$users[0]->name}}" name="name" disabled>
          </div>
          <div class="mb-3 col-lg-8">
              <label class="form-label">No Telephon</label>
              <input type="text" class="form-control"
              value="{{$users[0]->no_hp}}" name="no_hp" disabled>
          </div>
          <div class="mb-3 col-lg-8">
              <label class="form-label">Email</label>
              <input type="text" class="form-control"
              value="{{$users[0]->email}}" name="emal" disabled>
          </div>
          <div class="mb-3 col-lg-8">
              <label class="form-label">Alamat</label>
              <input type="text" class="form-control"
              value="{{$users[0]->alamat}}" name="alamat" disabled>
          </div>
          <div class="mb-3 col-lg-8 mb-3">
              <label class="form-label">Profesi</label>
              <input type="text" class="form-control mb-3"
              value="{{$users[0]->keahlian}}" name="nama" disabled>
              <a class="btn btn-secondary mb-3"href="/profil-dashboard/{{$users[0]->id}}/edit">Edit Profil</a>
          </div>
        </div>
      </div>
    </form>
</div>

@endsection
