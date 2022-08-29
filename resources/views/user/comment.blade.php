@extends('layouts.user.main')
@section('title',' Komentar')
@section('title-page', 'Komentar')

@section('content')

<div class="col-xl-12">
    <div class="card mb-0">
        <div class="card-body">
            <div class="mb-5 row align-items-center">
                <div class="col" style="max-width: 180px">
                    <img src="{{ ENV('FILE_URL').$data->foto }}" class="img-thumbnail rounded" style="width: 150px; height: 150px">
                </div>
                <div class="col">
                    <div>
                        <h6 class="category">{{ $data->category }}</h6>
                        <p class="font-weight-bold h4">{{ $data->title }}</p>
                    </div>
                    <div class="row p-2">
                        <div class="mr-3">
                            <img class="rounded-thumbnail" src="{{ isset($data->tutor_foto) && !empty($data->tutor_foto) ? ENV('FILE_URL').$data->tutor_foto : asset('img/user.jpg') }}">
                        </div>
                        <div>
                            <h6 class="font-weight-bold">{{ $data->tutor }}</h6>
                            <p>{{ $data->jabatan }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment-card" style="margin: 0px auto 0px auto">
                <form action="{{ url('comment/'.$data->id.'/'.$user->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="comment-box">
                                <h4>Bagaimana pendapatmu mengenai mata kuliah hari ini?</h4>
                                <div class="rating">
                                    <input type="radio" name="rating" value="5" id="5">
                                    <label for="5">☆</label>
                                    <input type="radio" name="rating" value="4" id="4">
                                    <label for="4">☆</label>
                                    <input type="radio" name="rating" value="3" id="3">
                                    <label for="3">☆</label>
                                    <input type="radio" name="rating" value="2" id="2">
                                    <label for="2">☆</label>
                                    <input type="radio" name="rating" value="1" id="1">
                                    <label for="1">☆</label>
                                </div>
                                    <div class="comment-area" style="width: 100%">
                                        <textarea class="form-control" name="comment" placeholder="Tulis komentar disini" rows="4" maxlength="100"></textarea>
                                    </div>
                                <div class="comment-btns mt-2">
                                    <div class="pull-right">
                                        <button class="btn-confirm-form">Send<i class="fa fa-long-arrow-right ml-1"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>

@endsection