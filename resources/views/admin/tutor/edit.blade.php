@extends('layouts.main')
@section('title',' Edit Tutor')
@section('title-page','Form Tutor')

@section('jquery')
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
@endsection

@section('content')
<!-- general form elements -->
<div class="row">
    <div class="col-md-12 p-2 mt-0">
        <div class="card card-primary" >
            <div class="card-header" style="background-color: rgb(253, 152, 1); color: white;">
                <h2 class="card-title" >Edit Data Tutor</h2>
            </div>
            <!-- /.card-header -->
            
                <form action="{{ route('tutor.update', $tutor->id ) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Nama </label>
                                    <input type="text" class="form-control form-control-border " id="name" name="name" value="{{ $tutor->name }}"  required>
                                    <input type="hidden" name="id" value="{{ $tutor->id }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender">Jenis Kelamin </label>
                                    <div class="form-group">
                                        <select class="custom-select form-control-border" id="gender" name="gender" value="{{ $tutor->gender }}" required>
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
                                    <input type="email" class="form-control form-control-border" id="email" name="email" value="{{ $tutor->email }}"  required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact">No.Hp/WA </label>
                                    <input type="text" class="form-control form-control-border" id="contact" name="contact" value="{{ $tutor->contact }}"  required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address">Alamat</label>
                                    <input type="text" class="form-control form-control-border" id="address" name="address" value="{{ $tutor->address }}" required>
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
                                <label for="preview" style="width: 100%">Preview Foto</label>
                                @if ($tutor->foto)
                                    <img width="150px" src="{{ env('FILE_URL').$tutor->foto }}" class="preview" style="d-block">
                                @endif
                                <img class="img-preview  form-control-border" style="height:auto; width:300px">
                            </div>
                        </div>
                             
                        <div class="row mb-3 p-2">
                            <div class="col-md-12">
                                <label for="description">Deskripsi</label>
                                <textarea name="description" id="description" rows="10" cols="80">
                                    {{ $tutor->description }}
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
<!-- /.card -->
<script>
     function previewImage() {
            const image = document.querySelector('#foto');
            const imgPreview = document.querySelector('.img-preview');
            const preview = document.querySelector('.preview');
            console.log(image);
            console.log(imgPreview);
            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function (oFREvent) {
                imgPreview.src = oFREvent.target.result;
                preview.style.display = "none";
            }
        }
</script>
@endsection