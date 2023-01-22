@extends('dashboards.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Update Kategori Karya</h1>
</div>
<div class="row">
  <div class="col-lg-8">

    <form class="" action="/kategori-dashboard/{{$kategoris->id}}" method="post">
      @method('put')
      @csrf

        <div class="mt-3">
          <label  class="form-label ">Nama Kategori Karya</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror"
          value="{{old('nama',$kategoris->nama)}}"  name="nama" >
          @error('nama')
          {{$message}}
          @enderror
      </div>
      <div class="mt-3 mb-3">
          <button class="btn btn-primary" type="submit">Update</button>
      </div>
    </form>

</div>
</div>
@endsection
