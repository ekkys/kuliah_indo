@extends('layouts.main')
@section('title',' Wilayah')
@section('title-page','Contoh Form Wilayah')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="provinsi">Province </label>
                <div class="form-group">
                    <select class="custom-select form-control-border" id="provinsi" name="provinsi"  required>
                    @foreach ($provinces as $province )
                        <option value="{{ $province->id }}">{{ $province->name }}</option>    
                    @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="kabupaten">Kabupaten </label>
                <div class="form-group">
                    <select class="custom-select form-control-border" id="kabupaten" name="kabupaten"  required>
                    @foreach ($regencies as $regency )
                        <option value="{{ $regency->id }}">{{ $regency->name }}</option>    
                    @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="kecamatan">Kecamatan </label>
                <div class="form-group">
                    <select class="custom-select form-control-border" id="kecamatan" name="kecamatan"  required>
                    @foreach ($districts as $district )
                        <option value="{{ $district->id }}">{{ $district->name }}</option>    
                    @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="kelurahan">Kelurahan </label>
                <div class="form-group">
                    <select class="custom-select form-control-border" id="kelurahan" name="kelurahan"  required>
                    @foreach ($villages as $village )
                        <option value="{{ $village->id }}">{{ $village->name }}</option>    
                    @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
@endsection