@extends('layouts.main')
@section('title',' Sertifikat')
@section('title-page', 'Sertifikat')

@section('content')
<div class="card card-primary">
  <form action="{{ url('/sertifikat') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container-fluid">
      <div class="col-12 p-2">
        <img src="{{ ENV('FILE_URL').$certificate->img }}" style="width: 100%; height: 100%">
      </div>
      <div class="form-group p-3">
        <label for="inputCertificate">Upload sertifikat</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputCertificate" name="sertifikatImage">
            <label class="custom-file-label" for="inputCertificate">Ukuran Dokumen A4 Landscape (29,7cm x 21cm)</label>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
@endsection