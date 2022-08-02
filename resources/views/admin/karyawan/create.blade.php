@extends('layouts.main')
@section('title',' Buat Karyawan')
@section('title-page','Form Karyawan')
@section('jquery')
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
@endsection
@section('content')
<!-- general form elements -->
<div class="row">
    <div class="col-md-12 p-2 mt-0">
        <div class="card card-primary" >
            <div class="card-header" style="background-color: rgb(253, 152, 1); color: white;">
                <h2 class="card-title" >Input Data Karyawan</h2>
            </div>
            <!-- /.card-header -->
            
                <form action="{{ route('karyawan.store') }}" method="post" enctype="multipart/form-data">
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
                                <label for="jabatan">Jabatan </label>
                                <div class="form-group">
                                    <select class="custom-select form-control-border" id="jabatan" name="jabatan"  required>
                                      @foreach ($jabatans as $jabatan)
                                      <option value="{{ $jabatan->id }}">{{ $jabatan->name }}</option>    
                                      @endforeach
                                    </select>
                                  </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control form-control-border" id="email" name="email"  required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <input type="text" class="form-control form-control-border" id="address" name="address"  required>
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
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="foto">Pas Foto</label>
                                {{-- <input type="file" class="form-control form-control-border"  name="foto" id="foto"> --}}
                                <input class="form-control form-control-border @error('image') is-invalid @enderror" type="file"  name="foto" id="foto" onchange="previewImage()">
                                @error('image')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="preview">Preview Fto</label>
                            <img class="img-preview  form-control-border" style="height:auto; width:300px">
                        </div>
                    </div>
                    <div class="row mb-3 p-2">
                        <div class="col-md-12">
                            <label for="description">Deskripsi</label>
                            <textarea name="description" id="description" rows="10" cols="80">
                            </textarea>
                            <script>
                                CKEDITOR.replace( 'description' );
                                // var data = CKEDITOR.instances.description.getData();
                            </script>
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
    function previewImage() {
           const image = document.querySelector('#foto');
           const imgPreview = document.querySelector('.img-preview');
           console.log(image);
           console.log(imgPreview);
           imgPreview.style.display = 'block';
           const oFReader = new FileReader();
           oFReader.readAsDataURL(image.files[0]);
           oFReader.onload = function (oFREvent) {
               imgPreview.src = oFREvent.target.result;
           }
       }
</script>
<!-- /.card -->
@endsection