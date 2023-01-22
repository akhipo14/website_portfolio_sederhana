@extends('dashboards.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Pesan</h1>
</div>

@if (session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{session('success')}}
  </div>
@endif

<table class="table table-bordered">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>No HP</th>
    <th>Email</th>
    <th>Tanggal</th>
    <th>Aksi</th>
  </tr>
  @foreach($pesans as $pesan)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $pesan->nama }}</td>
    <td>{{ $pesan->no_hp }}</td>
    <td>{{ $pesan->email }}</td>
    <td>{{ $pesan->created_at }}</td>

    <td>
        <a href="/pesan-dashboard/{{$pesan->id}}/edit" class="btn btn-primary btn-sm">Lihat Pesan</a>
        <form action="/pesan-dashboard/{{$pesan->id}}" class="d-inline" method="post">
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
