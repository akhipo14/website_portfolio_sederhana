@extends('dashboards.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Update Deskripsi Profil</h1>
</div>

<div class="row">
  <div class="col-lg-8">

    <form class="" action="/deskripsi-dashboard/{{$deskripsis->id}}" method="post">
      @method('put')
      @csrf
      <div class="mt-3">
        <label  class="form-label ">Tentang Saya</label> <br>
        <input id="tentang" type="hidden" name="tentang" class="form-control @error('tentang') is-invalid @enderror"
        value="{{old('tentang',$deskripsis->tentang)}}" >
        <trix-editor input="tentang"  ></trix-editor>
        @error('tentang')
        {{$message}}
        @enderror
      </div>
      <br>
      <div class="mt-3">
        <label  class="form-label ">Pendidikan</label> <br>
        <input id="pendidikan" type="hidden" name="Pendidikan" class="form-control @error('Pendidikan') is-invalid @enderror"
        value="{{old('Pendidikan',$deskripsis->Pendidikan)}}" >
        <trix-editor input="pendidikan"  ></trix-editor>
        @error('Pendidikan')
        {{$message}}
        @enderror
      </div>
      <br>
      <div class="mt-3">
        <label  class="form-label ">Pengalaman Kerja</label> <br>
        <input id="pengalaman_kerja" type="hidden" name="pengalaman_kerja" class="form-control @error('pengalaman_kerja') is-invalid @enderror"
        value="{{old('pengalaman_kerja',$deskripsis->pengalaman_kerja)}}" >
        <trix-editor input="pengalaman_kerja"  ></trix-editor>
        @error('pengalaman_kerja')
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
