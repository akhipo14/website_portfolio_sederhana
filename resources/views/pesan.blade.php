@extends('layouts.main')
@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Masukkan Pesan</h1>
</div>

@if (session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{session('success')}}
  </div>
@endif
<div class="row ">
    <div class="col col-lg-10">

    <form class="" action="/pesan" method="post">
    @csrf
      <div class="row ">
      <div class="col">
        <div class="mb-3 mt-3 col-lg-8 ">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror"
            value="{{old('nama')}}" name="nama"  >
            @error('nama')
            {{$message}}
            @enderror
        </div>
        <div class="mb-3 mt-3 col-lg-8">
            <label class="form-label">No Hp</label>
            <input type="number" class="form-control @error('no_hp') is-invalid @enderror"
            value="{{old('no_hp')}} "name="no_hp"  >
             @error('no_hp')
             {{$message}}
             @enderror
        </div>
        <div class="mb-3 mt-3 col-lg-8">
            <label class="form-label ">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror"
            value="{{old('email')}}" name="email"  >
           @error('email')
           {{$message}}
           @enderror
        </div>
        <div class="mt-3">
          <label  class="form-label ">Pesan</label> <br>
          <input id="pesan" type="hidden" name="pesan" class="form-control @error('pesan') is-invalid @enderror"
          value="{{old('pesan')}}">
          <trix-editor input="pesan" ></trix-editor>
          @error('pesan')
          {{$message}}
          @enderror
        </div>
        <div class="mb-3"><br>
            <button class="btn btn-primary" type="submit">Tambah Karya</button>
        </div>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection
