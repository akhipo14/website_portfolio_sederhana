@extends('layouts.main')
@section('container')
<br>
<br>
<br>
<div class="container mt-3">
<div class="row justify-content-md-center mb-3  ">
  <div class="col col-lg-1">

  </div>
  <div class="col col-lg-8">

    <div class="row g-5">
      <div class="col col-lg-5 d-flex justify-content-center">
        <span class="">
          @if($users[0]->profil_image)
          <img src="{{asset('storage/'.$users[0]->profil_image)}}" style="height:300px; width:300px;" class="img-preview rounded border border-5 border-white shadow"alt="">
          @else
          <img src="/img/images.png" style="height:300px; width:300px;" class="img-preview rounded border border-5 border-white shadow"alt="">
          @endif
        </span>
      </div>
@if($users->count()>0)
      <div class="col col-lg-7">

          <h1 class="mb-3 mt-1">{{$users[0]->name}}</h1>
          <p><b>{{$users[0]->keahlian}}</b></p>
          <p>{{$users[0]->no_hp}}<br> {{$users[0]->email}} <br>{{$users[0]->alamat}}</p>
          <a class="btn btn-primary btn-sm" href="/profil" role="button">Lihat lebih banyak</a>
      </div>
    </div>
  </div>

</div>
@endif
<br>
<br>
<br>
<br>
<br>
<br>

<div class="d-flex flex-column h-100 bg-white rounded">
  <div class="row justify-content-md-center mt-3">
  <div class="col col-lg-5">
    <div class=" text-center pt-3 pb-2 mb-3 border-bottom lg-6">
      <h3 class="">Blog</h3>
    </div>
  </div>
  <div class="row">
    @foreach($blogs as $blog)
    <div class="col-lg-4">
      <div class="card">
        <h5 class="card-header">{{$blog->jenis->nama}}</h5>
        <div class="card-body">
          <h5 class="card-title">{{$blog->title}}</h5>
          <p class="card-text">{{$blog->excerpt}}</p>
          <p class="text-muted">{{$blog->created_at->diffForHumans()}}</p>

        </div>
      </div>
      <br>
   </div>
   @endforeach
  </div>

</div>

<!-- btn lihat lebih banyak -->
<div class=" d-flex justify-content-center mt-3">
  <a href="/blog" class="btn btn-secondary ">Lihat lebih banyak</a>
</div>

<div class="row justify-content-md-center mt-3">
<div class="col col-lg-11">
  <div class=" text-center pt-3 pb-2 mb-3 border-bottom lg-6">

  </div>
</div>
</div>
<br>

<div class="row justify-content-md-center mt-3">
  <div class="col col-lg-5">
    <div class=" text-center pt-3 pb-2 mb-3 border-bottom lg-6">
      <h3 class="">Hasil Karya</h3>
    </div>
  </div>
  <div class="row">
    @foreach($karyas as $karya)
    <div class="col-lg-4">
      <div class="card" style="width: 18rem;">
        <h5 class="card-header">{{$karya->title}}</h5>
        <div class="card-body">
                @if($karya->image)
        <img src="{{asset('storage/'.$karya->image)}}" class="card-img-top mb-3" alt="...">
                @else
                <img src="/img/images.png" class="card-img-top mb-3" alt="...">
                @endif
          <p class="card-text">{{$karya->excerpt}}</p>

        </div>
      </div>
      </div>
      @endforeach
  </div>
</div>
<!-- btn lihat lebih banyak -->
<br>
<div class=" d-flex justify-content-center mt-3">
  <a href="/karya" class="btn btn-secondary ">Lihat lebih banyak</a>
</div>
<br>
<br>

</div>
</div>


@endsection
