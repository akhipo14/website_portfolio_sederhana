@extends('layouts.main')
@section('container')
<div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-secondary">
  <h1 class="h2">Blog</h1>
</div>
<div class="row">
  @foreach($blogs as $blog)
  <div class="col-lg-4">
    <div class="card">
      <h5 class="card-header">{{$blog->kategori_id}}</h5>
      <div class="card-body">
        <h5 class="card-title">{{$blog->title}}</h5>
        <p class="card-text">{{$blog->excerpt}}</p>
        <p class="text-muted">{{$blog->created_at->diffForHumans()}}</p>
        <a href="/blog/{{$blog->id}}" class="btn btn-primary">Lihat Blog</a>
      </div>
    </div>
    <br>
 </div>
 @endforeach
</div>
@endsection
