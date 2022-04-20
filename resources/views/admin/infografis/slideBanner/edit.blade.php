@extends('layouts.main')
@section('title','Info Grafis')
@section('title-page', 'Create Slide Banner')

@section('jquery')
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
@endsection

@section('content')
<!-- general form elements -->
<div class="row">
    <div class="col-md-12 p-2 mt-0">
        <div class="card card-primary" >
            <div class="card-header" style="background-color: rgb(253, 152, 1); color: white;">
                <h2 class="card-title" >Edit Data Slidebanner</h2>
            </div>
            <!-- /.card-header -->
            
                <form action="{{ route('slidebanner.update', $slidebanner->id ) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="image_banner">Gambar Slide Banner</label>
                                    {{-- <input type="file" class="form-control form-control-border"  name="foto" id="foto"> --}}
                                    <input class="form-control form-control-border @error('image_banner') is-invalid @enderror" type="file"  name="image_banner" id="image_banner" onchange="previewImage()">
                                    @error('image_banner')
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
                                    {{ $slidebanner->description }}
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
            const image = document.querySelector('#image_banner');
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