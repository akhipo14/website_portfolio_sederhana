@extends('dashboards.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Jenis Blog</h1>
</div>

  @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{session('success')}}
    </div>
  @endif

  <a href="{{ url('jenis-dashboard')}}/create" class="btn btn-primary mb-3">Tambah Jenis Blog</a>
  <table class="table table-bordered">
    <tr>
      <th>No</th>
      <th>Nama Jenis Blog</th>
      <th>Tanggal Buat</th>
      <th>Tanggal Update</th>
      <th>Aksi</th>
    </tr>
    @foreach($jenis as $jeniss)
    <tr>

      <td>{{ $loop->iteration }}</td>
      <td>{{ $jeniss->nama }}</td>
      <td>{{ $jeniss->created_at }}</td>
      <td>{{ $jeniss->updated_at }}</td>

      <td>
          <a href="/jenis-dashboard/{{$jeniss->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
          <form action="/jenis-dashboard/{{$jeniss->id}}" class="d-inline" method="post">
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
