@extends('layouts.main')
@section('title',' Buat Jadwal')
@section('title-page','Form Jadwal Kelas')
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
                <h2 class="card-title" >Input Data Jadwal kelas </h2>
            </div>
            <!-- /.card-header -->
                <form action="{{ route('penjadwalan.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Judul Kelas</label>
                                    <input type="text" class="form-control form-control-border" id="title" name="title" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tutor">Pilih Topic </label>
                                    <div class="form-group">
                                        <select class="custom-select form-control-border" id="topic" name="topic"  required>
                                        @foreach ($topics as $topic)
                                        <option value="{{ $topic->id }}">{{ $topic->name }}</option>    
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tutor">Pilih Tutor </label>
                                    <div class="form-group">
                                        <select class="custom-select form-control-border" id="tutor" name="tutor"  required>
                                        @foreach ($tutors as $tutor)
                                        <option value="{{ $tutor->id }}">{{ $tutor->name }}</option>    
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jabatan">Pilih Jabatan </label>
                                    <div class="form-group">
                                        <select class="custom-select form-control-border" id="jabatan" name="jabatan"  required>
                                        @foreach ($jabatans as $jabatan)
                                        <option value="{{ $jabatan->id }}">{{ $jabatan->name }}</option>    
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">Harga Kelas</label>
                                    <input type="text" class="form-control form-control-border" id="price" name="price"  required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="date">Tanggal</label>
                                            <input class="form-control" type="text" name="date" value="" required />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="timestart">Jam Mulai</label>
                                            <div class="input-group clockpicker pull-center" data-placement="left" data-align="top" data-autoclose="true"> <input type="text" class="form-control" name="timestart" required> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="timeend">Jam Selesai</label>
                                            <div class="input-group clockpicker pull-center" data-placement="left" data-align="top" data-autoclose="true"> <input type="text" class="form-control" name="timeend" required> 
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="foto">Poster Kelas</label>
                                    <input class="form-control form-control-border @error('image') is-invalid @enderror" type="file"  name="foto" id="foto" onchange="previewImage()" required>
                                    @error('image')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="preview">Preview Gambar</label>
                                <img class="img-preview  form-control-border" style="height:auto; width:300px">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="link_zoom">Link Zoom</label>
                                    <input type="text" class="form-control form-control-border" id="link_zoom" name="link_zoom">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3 p-2">
                            <div class="col-md-12">
                                <label for="description">Deskripsi</label>
                                <textarea name="description" id="description" rows="10" cols="80" required>
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
<script>
$(document).ready(function(){
    $(function() {
        $('input[name="date"]').daterangepicker({
            "startDate": "01/01/2020",
            "endDate": "17/01/2020",
            opens: 'center',
            locale: {
                format: 'DD/MM/YYYY'
            }
        });
    });
});
</script>

<script>
    jQuery(function($) {
    $('.clockpicker').clockpicker()
    .find('input').change(function(){
    console.log(this.value);
    });
    var input = $('#single-input').clockpicker({
    placement: 'bottom',
    align: 'left',
    autoclose: true,
    'default': 'now'
    });

});
</script>

<!-- /.card -->
@endsection