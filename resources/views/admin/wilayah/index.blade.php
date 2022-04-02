@extends('layouts.main')
@section('title',' Wilayah')
@section('title-page', 'Data Wilayah')

@section('content')
<div class="row">
  <div class="col-12 mb-2">
    <a class="btn btn" href="{{ route('wilayah.create') }}" style="background-color: rgb(253, 152, 1); color: white;"><i class="fas fa-plus p-1"></i>   Tambah wilayah</a>
  </div>
</div>
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h2 class="card-title"> <strong>Provinsi</strong> </h2>
        </div> 
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($provinces as $province)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $province->name }}</td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>No</th>
              <th>Nama</th>
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
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h2 class="card-title"> <strong>Kabupaten</strong> </h2>
        </div> 
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($regencies as $regency)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $regency->name }}</td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>No</th>
              <th>Nama</th>
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
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h2 class="card-title"> <strong>Kecamatan</strong> </h2>
        </div> 
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($districts as $district)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $district->name }}</td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>No</th>
              <th>Nama</th>
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
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h2 class="card-title"> <strong>Desa/Kelurahan</strong> </h2>
        </div> 
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($villages as $village)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $village->name }}</td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>No</th>
              <th>Nama</th>
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