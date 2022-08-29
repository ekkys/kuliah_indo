@extends('layouts.main')
@section('title',' Profile')
@section('title-page', 'Profile')

@section('content')
<div>
  <section class="content">
    <div class="container-fluid pb-3">
      <form action="{{ url('/mainprofile') }}" method="POST">
        @csrf
      <div class="card card-secondary">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
            <h3 class="card-title">Pembuka</h3>
          </div>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="pembuka1">Judul Pembuka</label>
            <input type="text" class="form-control" value="{{ $pembuka1->deskripsi }}" name="pembuka1" id="pembuka1" required/>
          </div>
          <div class="form-group">
            <label for="pembuka2">Isi Pembuka</label>
            <textarea class="form-control" rows="3" name="pembuka2" id="pembuka2" required>{{ $pembuka2->deskripsi }}</textarea>
          </div>
          <div class="form-group">
            <label for="pembuka3">Deskripsi Pembuka</label>
            <textarea class="form-control" rows="3" name="pembuka3" id="pembuka3" required>{{ $pembuka3->deskripsi }}</textarea>
          </div>
        </div>
      </div>

      <div class="card card-secondary">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
            <h3 class="card-title">Konten</h3>
          </div>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="tentang1">Judul Konten</label>
            <input type="text" class="form-control" value="{{ $tentang1->deskripsi }}" name="tentang1" id="tentang1" required/>
          </div>
          <div class="form-group">
            <label for="tentang2">Isi Konten</label>
            <textarea class="form-control" rows="3" name="tentang2" id="tentang2" required>{{ $tentang2->deskripsi }}</textarea>
          </div>
          <div class="form-group">
            <label for="tentang3">Deskripsi Konten</label>
            <textarea class="form-control" rows="3" name="tentang3" id="tentang3" required>{{ $tentang3->deskripsi }}</textarea>
          </div>
        </div>
      </div>

      <div class="card card-secondary">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
            <h3 class="card-title">Divisi</h3>
          </div>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="judulDivisi">Judul Divisi</label>
            <input type="text" class="form-control" value="{{ $judulDivisi->deskripsi }}" name="judulDivisi" required/>
          </div>
          <div class="form-group mb-4">
            <label for="deskripsiDivisi">Deskripsi Divisi</label>
            <input type="text" class="form-control" value="{{ $deskripsiDivisi->deskripsi }}" name="deskripsiDivisi" required/>
          </div>
          <div class="mb-4">
            <div>
              <span class="font-weight-bold">Divisi 1</span>
            </div>
            <div class="form-group">
              <label class="font-weight-normal" for="judulDivisi1">Judul</label>
              <input type="text" class="form-control" value="{{ $judulDivisi1->deskripsi }}" name="judulDivisi1" required/>
            </div>
            <div class="form-group">
              <label class="font-weight-normal" for="deskripsiDivisi1">Deskripsi</label>
              <textarea class="form-control" rows="3" name="deskripsiDivisi1" id="deskripsiDivisi1" maxlength="150" required>{{ $deskripsiDivisi1->deskripsi }}</textarea>
            </div>
          </div>
          <div class="mb-4">
            <div>
              <span class="font-weight-bold">Divisi 2</span>
            </div>
            <div class="form-group">
              <label class="font-weight-normal" for="judulDivisi2">Judul</label>
              <input type="text" class="form-control" value="{{ $judulDivisi2->deskripsi }}" name="judulDivisi2" required/>
            </div>
            <div class="form-group">
              <label class="font-weight-normal" for="deskripsiDivisi2">Deskripsi</label>
              <textarea class="form-control" rows="3" name="deskripsiDivisi2" id="deskripsiDivisi2" maxlength="150" required>{{ $deskripsiDivisi2->deskripsi }}</textarea>
            </div>
          </div>
          <div class="mb-4">
            <div>
              <span class="font-weight-bold">Divisi 3</span>
            </div>
            <div class="form-group">
              <label class="font-weight-normal" for="judulDivisi3">Judul</label>
              <input type="text" class="form-control" value="{{ $judulDivisi3->deskripsi }}" name="judulDivisi3" required/>
            </div>
            <div class="form-group">
              <label class="font-weight-normal" for="deskripsiDivisi3">Deskripsi</label>
              <textarea class="form-control" rows="3" name="deskripsiDivisi3" id="deskripsiDivisi3" maxlength="150" required>{{ $deskripsiDivisi3->deskripsi }}</textarea>
            </div>
          </div>
        </div>
      </div>

      <div class="card card-secondary">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
            <h3 class="card-title">Komentar</h3>
          </div>
        </div>
        <div class="card-body p-4">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              @foreach($comments as $comment)
              <div class="swiper-slide text-left">
                <label style="width: 100%">
                  @if ($comment->selected == '1')
                  <input class="input-comment-checkbox" type="checkbox" name="comment[]" value="{{ $comment->id }}" checked>
                  @else
                  <input class="input-comment-checkbox" type="checkbox" name="comment[]" value="{{ $comment->id }}">
                  @endif
                  <div class="comment-checkbox">
                    <div class="mb-1">
                      <span>
                        @if($comment->rating >= 1)
                        <i class="fas fa-star" style="color: #ffae00"></i>
                        @else
                        <i class="fas fa-star"></i>
                        @endif
                      </span>
                      <span>
                        @if($comment->rating >= 2)
                        <i class="fas fa-star" style="color: #ffae00"></i>
                        @else
                        <i class="fas fa-star"></i>
                        @endif
                      </span>
                      <span>
                        @if($comment->rating >= 3)
                        <i class="fas fa-star" style="color: #ffae00"></i>
                        @else
                        <i class="fas fa-star"></i>
                        @endif
                      </span>
                      <span>
                        @if($comment->rating >= 4)
                        <i class="fas fa-star" style="color: #ffae00"></i>
                        @else
                        <i class="fas fa-star"></i>
                        @endif
                      </span>
                      <span>
                        @if($comment->rating >= 5)
                        <i class="fas fa-star" style="color: #ffae00"></i>
                        @else
                        <i class="fas fa-star"></i>
                        @endif
                      </span>
                    </div>
                    <div class="d-flex mb-1">
                      <div class="align-self-center">
                        <img src="{{ isset($comment->picture) && !empty($comment->picture) ? ENV('FILE_URL').$comment->picture : asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle" style="width: 40px; height: 40px">
                      </div>
                      <div class="align-self-center ml-2 font-weight-bold">
                        {{ $comment->name }}
                      </div>
                    </div>
                    <div class="mb-1" style="color: #6d6d6d; font-size: 14px">
                        {{ $comment->title }}
                    </div>
                    <div style="font-size: 16px">
                        {{ $comment->comment }}
                    </div>
                  </div>
                </label>
              </div>
              @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>

      <div class="form-group mb-0">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </section>
</div>
@endsection