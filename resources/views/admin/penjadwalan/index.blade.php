@extends('layouts.main')
@section('title',' Jadwal')
@section('title-page', 'Data Jadwal Kelas')

@section('content')
<div class="row">
  <div class="col-12 mb-2">
    <a class="btn btn" href="{{ route('penjadwalan.create') }}" style="background-color: rgb(253, 152, 1); color: white;"><i class="fas fa-plus p-1"></i>   Buat Jadwal Kelas</a>
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
                <th>Poster kelas</th>
                <th>Title</th>
                <th>Date</th>
                <th>Time</th>
                <th>Tutor</th>
                <th>Topic</th>
                <th>Jabatan</th>
                <th>Price</th>
                <th>Description</th>
                <th width='100'>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($penjadwalans as $penjadwalan)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    @if ($penjadwalan->foto)
                    <img width="150px" src="{{ asset('storage/'.$penjadwalan->foto) }}" style="d-block">
                    @else
                    <img width="150px" src="{{ asset('img/user.jpg') }}" style="d-block">

                    @endif
                </td>
                <td>{{ $penjadwalan->name }}</td>
                <td>{{ $penjadwalan->gender }}</td>
                <td>{{ $penjadwalan->email }}</td>
                <td>{{ $penjadwalan->address }}</td>
                <td>{{ $penjadwalan->contact }}</td>
                <td>{{ $penjadwalan->jabatan_id }}</td>
                <td>{!! $penjadwalan->description !!}</td>
                <td>
                    <a class="btn btn-sm" href="{{ route('penjadwalan.index') }}/{{ $penjadwalan->id }}/edit" style="background-color: rgb(12, 173, 165); color: white; display:inline;"><i class="fas fa-pencil" aria-hidden="true"></i> Edit</a>
                    <form action="{{ route('penjadwalan.index') }}/{{ $penjadwalan->id }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-sm" onclick="return confirm('Are you sure?') " style="background-color: rgb(252, 0, 0); color: white; display:inline;">Hapus</button>
                   </form>
                  </td>
              </tr>
              @endforeach
              
            </tbody>
            <tfoot>
            <tr>
                <th>No</th>
                <th>Poster kelas</th>
                <th>Title</th>
                <th>Date</th>
                <th>Time</th>
                <th>Tutor</th>
                <th>Topic</th>
                <th>Jabatan</th>
                <th>Price</th>
                <th>Description</th>
              <th>Aksi</th>
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

