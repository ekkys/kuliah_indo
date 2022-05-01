@extends('layouts.main')
@section('title',' Buat Absesnsi')
@section('title-page','Form Absensi')
@section('jquery')
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/clockpicker/0.0.7/bootstrap-clockpicker.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clockpicker/0.0.7/bootstrap-clockpicker.min.js"></script>
  
@endsection
    

@section('content')
<!-- general form elements -->
<div class="row">
    <div class="col-md-12 p-2 mt-0">
        <div class="card card-primary" >
            <div class="card-header" style="background-color: rgb(253, 152, 1); color: white;">
                <h2 class="card-title" >Input Data Absensi </h2>
            </div>
            <!-- /.card-header -->
                <form action="{{ route('penjadwalan.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="date">Tanggal</label>
                                            <input class="form-control" type="date" name="date" value="{{ date('Y-m-d') }}" />
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tutor">Pilih Course </label>
                                    <div class="form-group">
                                        <select class="custom-select form-control-border" id="penjadwalan" name="penjadwalan"  required>
                                        @foreach ($penjadwalans as $penjadwalan)
                                        <option value="{{ $penjadwalan->id }}">{{ $penjadwalan->title }}</option>    
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col">
                                    <table class="table hover">
                                        <thead>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Keterangan</th>
                                        </thead>
                                        @foreach ($users as $user)
                                        <tbody>
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <input type="text" class="form-control form-control-border " id="name" name="name" value="{{ $user->name }}"  required>
                                                    {{-- <input class="form-control form-control-boder" type="text" name="name" value="{{ $user->name }}"></td> --}}
                                                <td>
                                                    <label class="radio-inline">
                                                        <input id="aktif" type="radio" name="" value="Hadir" checked>Hadir
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input id="aktif" type="radio" name="" value="Alfa" >Alfa
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input id="aktif" type="radio" name="" value="Izin" >Izin
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input id="aktif" type="radio" name="" value="Sakit" >Sakit
                                                    </label>
                                                </td>
                                            </tr>
                                        </tbody>
                                        
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-secondary d-flex justify-content-end">Simpan</button>
                    </div>
                </form>
            <!-- /.card-body -->
        </div>
    </div>
</div>


<script>
 var tanggal = document.getElementById('date').value;
 var status = document.getElementById('aktif').value;
 console.log(tanggal);
 console.log(status);
</script>

<!-- /.card -->
@endsection