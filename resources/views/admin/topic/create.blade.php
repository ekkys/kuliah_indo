@extends('layouts.main')
@section('title',' Buat Topik')
@section('title-page','Form Topik')

@section('content')
<!-- general form elements -->
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary" >
            <div class="card-header" style="background-color: rgb(253, 152, 1); color: white;">
                <h2 class="card-title" >Form Input Data Topik</h2>
            </div>
            <!-- /.card-header -->
            
                <form action="{{ route('topic.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nama Topik</label>
                            <input type="text" class="form-control form-control-border" id="name" name="name" placeholder="Contoh : Pemrograman">
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi Topik</label>
                            <input type="text" class="form-control form-control-border" id="description" name="description" placeholder="Contoh : Pemrograman adalah proses menulis, menguji dan memperbaiki, dan memelihara kode yang membangun suatu program komputer. Kode ini ditulis dalam berbagai bahasa pemrograman.">
                        </div>
                        <button type="submit" class="btn btn-secondary d-flex justify-content-end">Simpan</button>
                    </div>
                </form>
            <!-- /.card-body -->
        </div>
    </div>
</div>
<!-- /.card -->
@endsection