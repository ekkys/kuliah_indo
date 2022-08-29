@extends('layouts.main')
@section('title','Absensi')
@section('title-page', 'Detail Absensi')

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <!-- /.card-header -->
        <input type="hidden" value="{{$course_id}}" id="course_id" />
        {{-- <select class="float-right mr-3 mt-3 form-control" onchange="tanggal()" id="tanggal" style="width: 150px; position: absolute; right: 0px">
            <option selected disabled>-- Pilih tanggal -- </option>
            @foreach ($tanggal as $tanggal)
                <option value="{{ $tanggal->tanggal }}">{{ $tanggal->tanggal }}</option>
            @endforeach
        </select> --}}
        <div class="card-body mt-5">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($absensis as $absensi)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $absensi->name }}</td>
                <td>{{ $absensi->email }}</td>
                <td>{{ $absensi->tanggal_hadir }}</td>
                <td>{{ $absensi->status_hadir }}</td>
                <td>
                    <a class="btn btn-sm" href="{{ route('absensi.index') }}/{{ $absensi->id }}/{{ $absensi->course_id }}/{{1}}/{{$absensi->tanggal_hadir}}/kehadiran" style="background-color: rgb(12, 173, 165); color: white; display:inline;"><i class="fas fa-pencil" aria-hidden="true"></i> Hadir</a>
                    <a class="btn btn-sm" href="{{ route('absensi.index') }}/{{ $absensi->id }}/{{ $absensi->course_id }}/{{0}}/{{$absensi->tanggal_hadir}}/kehadiran" style="background-color: red; color: white; display:inline;"><i class="fas fa-pencil" aria-hidden="true"></i> Tidak Hadir</a>
                  </td>
              </tr>
              @endforeach
              
            </tbody>
            <tfoot>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Deskripsi</th>
              <th>Tanggal</th>
              <th>Status</th>
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
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
  <script>
      function tanggal() {
          let tanggal = $("#tanggal").val();
          let course_id = $("#course_id").val();
          $(location).attr('href',"/kuliah_indo/absensi/"+course_id+"/edit?date="+tanggal);
      }
  </script>
@endsection