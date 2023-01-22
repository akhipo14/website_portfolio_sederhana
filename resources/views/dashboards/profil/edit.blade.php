@extends('dashboards.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Profil</h1>
</div>



<div class="row">
  <div class="col">
    <form action="/profil-dashboard/{{$users->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
      <div class="row">
        <div class="col col-lg-4 mb-3">
          <label class="form-label">Foto Profi</label>
            <div class="d-flex justify-content-start ">
              @if($users->profil_image)
              <img src="{{asset('storage/'.$users->profil_image)}}" style="height:300px; width:300px;" class="img-preview  rounded border border-5 border-white shadow"alt="">
            @else
            <img src="/img/images.png" style="height:300px; width:300px;" class="img-preview  rounded border border-5 border-white shadow"alt="">
            @endif
          </div>
          <div class="col col-lg-11">

          <input class="form-control mt-3  @error('profil_image')is-invalid @enderror" type="file"
          id="profil_image" name="profil_image" onchange="previewImage()">
          @error('profil')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        </div>

        <div class="col col-lg-8">
          <div class="mb-3 mt-3 col-lg-8">
              <label class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control "
              value="{{old('name',$users->name)}}" name="name">
          </div>
          <div class="mb-3 col-lg-8">
              <label class="form-label">No Telephon</label>
              <input type="text" class="form-control"
              value="{{old('no_hp',$users->no_hp)}}" name="no_hp"  >
          </div>
          <div class="mb-3 col-lg-8">
              <label class="form-label">Email</label>
              <input type="text" class="form-control"
              value="{{old('email',$users->email)}}" name="email"  >
          </div>
          <div class="mb-3 col-lg-8">
              <label class="form-label">Alamat</label>
              <input type="text" class="form-control"
              value="{{old('alamat',$users->alamat)}}" name="alamat"  >
          </div>
          <div class="mb-3 col-lg-8 mb-3">
              <label class="form-label">Profesi</label>
              <input type="text" class="form-control mb-3"
              value="{{old('keahlian',$users->keahlian)}}" name="keahlian"  >
              <div class="mb-3">
                  <button class="btn btn-primary" type="submit">Update</button>
              </div>
          </div>
        </div>
      </div>

    </form>
  </div>
    <script type="text/javascript">
        function previewImage(){
          const image = document.querySelector('#profil_image');
          const imgPreview = document.querySelector('.img-preview');

          imgPreview.style.display = 'block';
          const oFReader = new FileReader();
          oFReader.readAsDataURL(image.files[0]);
          oFReader.onload = function(oFREvent){
            imgPreview.src=oFREvent.target.result;
          }
        }
    </script>
</div>

@endsection
