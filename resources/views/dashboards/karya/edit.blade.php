@extends('dashboards.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Update Karya</h1>
</div>
<div class="row">
    <div class="col-lg-6">
    <form action="/karya-dashboard/{{$karyas->id}}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf

        <div class="mb-3">
          <label for="image" class="form-label">Gambar Karya</label>
          @if($karyas->image)
          <img src="{{asset('storage/'.$karyas->image)}} " class="img-preview img-fluid mb-3 col-sm-5 d-block">
          @else
          <img class="img-preview img-fluid mb-3 col-sm-5">
          @endif
          <input class="form-control  @error('image')is-invalid @enderror" type="file"
          id="image" name="image" onchange="previewImage()">
          @error('image')
          <div class="invalid-feedback">
          {{$message}}
        </div>
          @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control @error('title')is-invalid @enderror"
            value="{{old('title',$karyas->title)}}" name="title">
            @error('title')
            {{$message}}
            @enderror
        </div>

        <div class="mt-3">
          <label  class="form-label ">Kategori</label> <br>
          <select class="form-select" name="kategori_id" aria-label="Default select example">
              @foreach($kategoris as $kategori)
              @if(old('kategori_id',$karyas->kategori_id)==$kategori->id)
                <option value="{{$kategori->id}}" selected>{{$kategori->nama}}</option>
                @else
                <option value="{{$kategori->id}}">{{$kategori->nama}}</option>
                @endif
              @endforeach
          </select>
      </div>
      <div class="mt-3">
        <label  class="form-label ">Deskripsi</label> <br>
        <input id="deskripsi" type="hidden" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
        value="{{old('deskripsi',$karyas->deskripsi)}}">
        <trix-editor input="deskripsi"  ></trix-editor>
        @error('deskripsi')
        {{$message}}
        @enderror
      </div>
        <div class="mb-3"><br>
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
      </div>

      <script type="text/javascript">
          function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent){
              imgPreview.src=oFREvent.target.result;
            }
          }
      </script>

      </form>
    </div>
</div>
@endsection
