@extends('layouts.main')
@section('container')
<div class=" container mt-3">

<div class="row">
  <div class="col col-lg-4">
      <div class="d-flex justify-content-start ">
        @if($users[0]->profil_image)
        <img src="{{asset('storage/'.$users[0]->profil_image)}}" style="height:300px; width:300px;" class="img-preview  rounded border border-5 border-white shadow"alt="">
      @else
      <img src="/img/images.png" style="height:300px; width:300px;" class="img-preview  rounded border border-5 border-white shadow"alt="">
      @endif
      </div>
      </div>
@if($users->count()>0)
  <div class="col col-lg-4 ">
    <div class="mt-2">
      <div class="d-flex justify-content-between  flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-secondary lg-6">
        <h1 class="">{{$users[0]->name}}</h1>
      </div>
      <p><b>{{$users[0]->keahlian}}</b></p>
      <p>{{$users[0]->no_hp}}<br> {{$users[0]->email}} <br>{{$users[0]->alamat}}</p>
    </div>
  </div>

</div>
@endif
<br>
  <div class="row">
    @if($users->count()>0)
    <div class="col col-lg-4">
      <div class="card ">
        <div class="card-header">
          Tentang Saya
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>{!!$deskripsis[0]->tentang!!}
            </p>
          </blockquote>
        </div>
      </div>
    </div>
@endif
@if($users->count()>0)
    <div class="col col-lg-4">
      <div class="card ">
        <div class="card-header">
          Riwayat Pendidikan
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>{!!$deskripsis[0]->Pendidikan!!}</p>
          </blockquote>
        </div>
      </div>
    </div>
@endif
@if($users->count()>0)
    <div class="col col-lg-4">
      <div class="card ">
        <div class="card-header">
          Pengalaman Kerja
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>{!!$deskripsis[0]->pengalaman_kerja!!}</p>
          </blockquote>
        </div>
      </div>
    </div>
@endif
  </div>
</div>
@endsection
