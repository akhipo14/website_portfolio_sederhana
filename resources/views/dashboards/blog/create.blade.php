@extends('dashboards.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Tambah Blog</h1>
</div>
<div class="row">
  <div class="col-lg-8">

    <form class="" action="/blog-dashboard" method="post">
      @csrf

        <div class="mt-3">
          <label  class="form-label ">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror"
          value="{{old('title')}}"  name="title">
          @error('title')
          {{$message}}
          @enderror
      </div>

        <div class="mt-3">
          <label  class="form-label ">Jenis Blog</label> <br>
          <select class="form-select" name="jenis_id" aria-label="Default select example">
              @foreach($jenis as $jeniss)
              @if(old('jeniss_id')) ==$jeniss->id
                <option value="{{$jeniss->id}}" selected>{{$jeniss->nama}}</option>
              @else
                <option value="{{$jeniss->id}}">{{$jeniss->nama}}</option>
              @endif
              @endforeach
          </select>
      </div>

      <div class="mt-3">
        <label  class="form-label ">Body</label> <br>
        <input id="body" type="hidden" name="body" class="form-control @error('body') is-invalid @enderror"
        value="{{old('body')}}">
        <trix-editor input="body"  ></trix-editor>
        @error('body')
        {{$message}}
        @enderror
      </div>

      <div class="mt-3 mb-3">
          <button class="btn btn-primary" type="submit">Tambah Berita</button>
      </div>
    </form>

</div>
</div>
@endsection
