@extends('dashboards.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Hasil Karya</h1>
</div>
  @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{session('success')}}
    </div>
  @endif

  <a href="{{ url('karya-dashboard')}}/create" class="btn btn-primary mb-3">Tambah Karya</a>
  <table class="table table-bordered">
    <tr>
      <th>No</th>
      <th>Title</th>
      <th>Jenis Karya</th>
      <th>Excerpt</th>
      <th>Aksi</th>
    </tr>
    @foreach($karyas as $karya)
    <tr>

      <td>{{ $loop->iteration }}</td>
      <td>{{ $karya->title }}</td>
      <td>{{ $karya->kategori->nama }}</td>
      <td>{{ $karya->excerpt }}</td>

      <td>
          <a href="/karya-dashboard/{{$karya->id}}/edit" class="btn btn-primary btn-sm">Lihat dan Edit</a>
          <form action="/karya-dashboard/{{$karya->id}}" class="d-inline" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger btn-sm"
            onclick="return confirm('Yakin mau Hapus Data?')">Delete</button>
          </form>
      </td>

    @endforeach
    </tr>
  </table>
</div>
@endsection
