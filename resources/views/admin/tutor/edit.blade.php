@extends('layouts.main')
@section('title',' Edit Tutor')
@section('title-page','Form Tutor')

@section('content')
<!-- general form elements -->
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary" >
            <div class="card-header" style="background-color: rgb(253, 152, 1); color: white;">
                <h2 class="card-title" >Edit Data Tutor</h2>
            </div>
            <!-- /.card-header -->
            
                <form action="{{ route('tutor.update', $tutor->id ) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nama </label>
                            <input type="text" class="form-control form-control-border " id="name" name="name" value="{{ $tutor->name }}"  required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Jenis Kelamin </label>
                            <div class="form-group">
                                <select class="custom-select form-control-border" id="gender" name="gender"  required>
                                <option value="{{ $tutor->gender }}">{{ $tutor->gender }}</option>
                                  <option value="L">L</option>
                                  <option value="P">P</option>
                                </select>
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <input type="text" class="form-control form-control-border" id="address" name="address" value="{{ $tutor->address }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control form-control-border" id="email" name="email" value="{{ $tutor->email }}" required>
                        </div>
                        <div class="form-group">
                            <label for="contact">No.Hp/WA </label>
                            <input type="text" class="form-control form-control-border" id="contact" name="contact" value="{{ $tutor->contact }}" required>
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