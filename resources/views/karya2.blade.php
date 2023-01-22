@extends('layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-secondary">
  <h1 class="h2">Karya</h1>
  <a href="/karya" class="btn btn-secondary">kembali</a>
</div>
<h1>{{$karyas->title}}</h1>
<img src="{{asset('storage/'.$karyas->image)}}" style="height:300px; width:300px;" class="card-img-top mb-3" alt="...">
<p>{!! $karyas->deskripsi!!}</p>

@endsection
