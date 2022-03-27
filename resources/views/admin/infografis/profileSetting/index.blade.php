@extends('layouts.main')
@section('title','Info Grafis')
@section('title-page', 'Setting Profile')

@section('content')
<div class="row">
  <div class="col-12 mb-2">
    <a class="btn btn" href="{{ route('setting.create') }}" style="background-color: rgb(253, 152, 1); color: white;"><i class="fas fa-plus p-1"></i>   Tambah setting</a>
  </div>
</div>
<div class="row">
    <div class="col-12">
      <div class="card">
        {{-- <div class="card-header">
          <h3 class="card-title"></h3>
        </div> --}}
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th width='100'>Aksi</th>
                <th>Foto</th>
                <th>Kontak</th>
                <th>Link Maps</th>
                <th>Email</th>
                <th>Facebook</th>
                <th>Instagram</th>
                <th>Twitter</th>
                <th>YouTube</th>
                <th>Alamat</th>
                <th>Deskripsi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($settings as $setting)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <a class="btn btn-sm" href="{{ route('setting.index') }}/{{ $setting->id }}/edit" style="background-color: rgb(12, 173, 165); color: white; display:inline;"><i class="fas fa-pencil" aria-hidden="true"></i> Edit</a>
                    <form action="{{ route('setting.index') }}/{{ $setting->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-sm" onclick="return confirm('Are you sure?') " style="background-color: rgb(252, 0, 0); color: white; display:inline;">Hapus</button>
                    </form>
                </td>
                <td><img width="150px" src="{{ asset('storage/'.$setting->image_profile) }}" alt=""></td>
                <td>{{ $setting->contact }}</td>
                <td>{{ $setting->gmaps }}</td>
                <td>{{ $setting->email }}</td>
                <td>{{ $setting->facebook }}</td>
                <td>{{ $setting->instagram }}</td>
                <td>{{ $setting->twitter }}</td>
                <td>{{ $setting->youtube }}</td>
                <td>{{ $setting->address }}</td>
                <td>{!! $setting->description !!}</td>
              </tr>
              @endforeach
              
            </tbody>
            <tfoot>
            <tr>
              <th>No</th>
              <th>Aksi</th>
              <th>Foto</th>
              <th>Kontak</th>
              <th>Link Maps</th>
              <th>Email</th>
              <th>Facebook</th>
              <th>Instagram</th>
              <th>Twitter</th>
              <th>YouTube</th>
              <th>Alamat</th>
              <th>Deskripsi</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
@endsection
