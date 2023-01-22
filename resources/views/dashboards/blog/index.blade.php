@extends('dashboards.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Blog</h1>
</div>

  @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{session('success')}}
    </div>
  @endif

  <a href="{{ url('blog-dashboard')}}/create" class="btn btn-primary mb-3">Tambah Blog</a>
  <table class="table table-bordered">
    <tr>
      <th>No</th>
      <th>Title</th>
      <th>Jenis Blog</th>
      <th>Excerpt</th>
      <th>Aksi</th>
    </tr>
    @foreach($blogs as $blog)
    <tr>

      <td>{{ $loop->iteration }}</td>
      <td>{{ $blog->title }}</td>
      <td>{{ is_null($blog->jenis) ? '-' : $blog->jenis->nama }}</td>
      <td>{{ $blog->excerpt }}</td>

      <td>
          <a href="/blog-dashboard/{{$blog->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
          <form action="/blog-dashboard/{{$blog->id}}" class="d-inline" method="post">
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
