@extends('layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-secondary">
  <h1 class="h2">Blog</h1>
  <a href="/blog" class="btn btn-secondary">kembali</a>
</div>
<h1>{{$blogs->title}}</h1>
<p>{!! $blogs->body!!}</p>
@endsection
