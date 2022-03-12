@extends('layouts.main')
@section('title',' Tutor')
@section('title-page', 'Data Tutor')

@section('content')
<div class="row">
  <div class="col-12 mb-2">
    <a class="btn btn" href="{{ route('tutor.create') }}" style="background-color: rgb(253, 152, 1); color: white;"><i class="fas fa-plus p-1"></i>   Tambah Tutor</a>
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
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>No.Hp</th>
                <th width='100'>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($tutors as $tutor)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $tutor->name }}</td>
                <td>{{ $tutor->gender }}</td>
                <td>{{ $tutor->email }}</td>
                <td>{{ $tutor->address }}</td>
                <td>{{ $tutor->contact }}</td>
          
                <td>
                    <a class="btn btn-sm" href="{{ route('tutor.index') }}/{{ $tutor->id }}/edit" style="background-color: rgb(12, 173, 165); color: white; display:inline;"><i class="fas fa-pencil" aria-hidden="true"></i> Edit</a>
                    <form action="{{ route('tutor.index') }}/{{ $tutor->id }}" method="post" class="d-inline">
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
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Email</th>
              <th>Alamat</th>
              <th>No.Hp</th>
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