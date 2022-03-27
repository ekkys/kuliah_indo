@extends('layouts.main')
@section('title','Info Grafis')
@section('title-page', 'Profile Profile')

@section('jquery')
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
@endsection

@section('content')
<!-- general form elements -->
<div class="row">
    <div class="col-md-12 p-2 mt-0">
        <div class="card card-primary" >
            <div class="card-header" style="background-color: rgb(253, 152, 1); color: white;">
                <h2 class="card-title" >Input Data Profile</h2>
            </div>
            <!-- /.card-header -->
            
                <form action="{{ route('setting.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact">No.HP/WhatsApp</label>
                                    <input type="text" class="form-control form-control-border " id="contact" name="contact"  required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gmaps">Link Google Map</label>
                                    <input type="text" class="form-control form-control-border " id="gmaps" name="gmaps"  required>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Alamat Email</label>
                                    <input type="text" class="form-control form-control-border " id="email" name="email"  required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="facebook">Link Facebook</label>
                                    <input type="text" class="form-control form-control-border " id="facebook" name="facebook"  required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="instagram">Link Instagram</label>
                                    <input type="text" class="form-control form-control-border " id="instagram" name="instagram"  required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="linkedin">Link linkedin</label>
                                    <input type="text" class="form-control form-control-border " id="linkedin" name="linkedin"  required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="twitter">Link Twitter</label>
                                    <input type="text" class="form-control form-control-border " id="twitter" name="twitter"  required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="youtube">Link YouTube</label>
                                    <input type="text" class="form-control form-control-border " id="youtube" name="youtube"  required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="image_Profile">Gambar Profile</label>
                                    {{-- <input type="file" class="form-control form-control-border"  name="foto" id="foto"> --}}
                                    <input class="form-control form-control-border @error('image') is-invalid @enderror" type="file"  name="image_Profile" id="image_Profile" onchange="previewImage()">
                                    @error('image')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <label for="preview">Preview Gambar</label>
                                    <img class="img-preview  form-control-border" style="height:auto; width:500px">
                                </div>
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
<!-- /.card -->
<script>
     function previewImage() {
            const image = document.querySelector('#image_Profile');
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
@endsection