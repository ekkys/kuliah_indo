@extends('layouts.main')
@section('title',' Buat Tutor')
@section('title-page','Form Tutor')

@section('content')
<!-- general form elements -->
<div class="row">
    <div class="col-md-12 p-2 mt-0">
        <div class="card card-primary" >
            <div class="card-header" style="background-color: rgb(253, 152, 1); color: white;">
                <h2 class="card-title" >Input Data Tutor</h2>
            </div>
            <!-- /.card-header -->
            
                <form action="{{ route('tutor.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Nama </label>
                                    <input type="text" class="form-control form-control-border " id="name" name="name"  required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender">Jenis Kelamin </label>
                                    <div class="form-group">
                                        <select class="custom-select form-control-border" id="gender" name="gender"  required>
                                          <option value="L">L</option>
                                          <option value="P">P</option>
                                        </select>
                                      </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control form-control-border" id="email" name="email"  required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact">No.Hp/WA </label>
                                    <input type="text" class="form-control form-control-border" id="contact" name="contact"  required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address">Alamat</label>
                                    <input type="text" class="form-control form-control-border" id="address" name="address"  required>
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
<!-- /.card -->
@endsection