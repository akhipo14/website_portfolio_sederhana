@extends('dashboards.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Kategori Karya</h1>
</div>
@if (session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{session('success')}}
  </div>
@endif

<a href="{{ url('kategori-dashboard')}}/create" class="btn btn-primary mb-3">Tambah Kategori Karya</a>
<table class="table table-bordered">
  <tr>
    <th>No</th>
    <th>Nama Kategori Karya</th>
    <th>Tanggal Buat</th>
    <th>Tanggal Update</th>
    <th>Aksi</th>
  </tr>
  @foreach($kategoris as $kategori)
  <tr>

    <td>{{ $loop->iteration }}</td>
    <td>{{ $kategori->nama }}</td>
    <td>{{ $kategori->created_at }}</td>
    <td>{{ $kategori->updated_at }}</td>

    <td>
        <a href="/kategori-dashboard/{{$kategori->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
        <form action="/kategori-dashboard/{{$kategori->id}}" class="d-inline" method="post">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger btn-sm"
          onclick="return confirm('Yakin mau Hapus Data?')">Delete</button>
        </form>
    </td>

  @endforeach
  </tr>
</table>
@endsection
