@extends('layouts.main')
@section('title','Info Grafis')
@section('title-page', 'Setting Kontak')

@section('content')
<div>
  <div>
      <div class="card card-primary" >
          <div class="card-header" style="background-color: rgb(253, 152, 1); color: white;">
              <h2 class="card-title" >Informasi Kontak</h2>
          </div>
          <!-- /.card-header -->
          
              <form action="" method="post">
                  @csrf
                  <div class="card-body">
                      <div class="form-group">
                        <label for="name">No. Telp</label>
                        <input type="text" class="form-control form-control-border" name="contact" value="{{ $settings->contact }}">
                      </div>
                      <div class="form-group">
                        <label for="name">Alamat</label>
                        <input type="text" class="form-control form-control-border" name="address" value="{{ $settings->address }}">
                      </div>
                      <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" class="form-control form-control-border" name="email" value="{{ $settings->email }}">
                      </div>
                      <div class="form-group">
                        <label for="name">Google Maps</label>
                        <input type="text" class="form-control form-control-border" name="maps" value="{{ $settings->maps }}">
                      </div>
                      <div class="form-group">
                        <label for="name">Facebook</label>
                        <input type="text" class="form-control form-control-border" name="facebook" value="{{ $settings->facebook }}">
                      </div>
                      <div class="form-group">
                        <label for="name">Instagram</label>
                        <input type="text" class="form-control form-control-border" name="instagram" value="{{ $settings->instagram }}">
                      </div>
                      <div class="form-group">
                        <label for="name">Twitter</label>
                        <input type="text" class="form-control form-control-border" name="twitter" value="{{ $settings->twitter }}">
                      </div>
                      <div class="form-group">
                        <label for="name">Youtube</label>
                        <input type="text" class="form-control form-control-border" name="youtube" value="{{ $settings->youtube }}">
                      </div>
                      <div class="form-group">
                        <label for="name">Linked In</label>
                        <input type="text" class="form-control form-control-border" name="linkedin" value="{{ $settings->linkedin }}">
                      </div>
                      <button type="submit" class="btn btn-secondary d-flex justify-content-end">Simpan </button>
                  </div>
              </form>
          <!-- /.card-body -->
      </div>
  </div>
</div>
@endsection
