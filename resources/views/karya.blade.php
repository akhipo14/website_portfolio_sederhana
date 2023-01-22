@extends('layouts.main')
@section('container')
<div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-secondary">
  <h1 class="h2">Hasil Karya</h1>
</div>
<div class="row">


@foreach($karyas as $karya)
<div class="col col-lg-4 d-flex justify-content-center">

<div class="card mb-3 mt-3" style="width: 18rem;">
  <h5 class="card-header">{{$karya->title}}</h5>
  <div class="card-body">
          @if($karya->image)
  <img src="{{asset('storage/'.$karya->image)}}" class="card-img-top mb-3" alt="...">
          @else
          <img src="/img/images.png" class="card-img-top mb-3" alt="...">
          @endif
    <p class="card-text">{{$karya->excerpt}}</p>
        <a href="/karya/{{$karya->id}}" class="btn btn-primary">Lihat lebih banyak</a>
  </div>
</div>

</div>
@endforeach

</div>
@endsection
