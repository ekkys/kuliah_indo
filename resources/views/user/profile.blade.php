@extends('layouts.user.main')
@section('title',' Dashboard')
@section('title-page', 'User Profile')

@section('content')
       <div class="col-xl-8">
              <div class="card mb-0">
                     <div class="card-body">
                            <h4 class="card-title">Edit Profile</h4>
                            <p class="card-title-desc">Please input corectly for adjusting the profile data</p>
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <span>{{ session('success') }}</span>
                                </div>
                            @endif
                            <form action="{{ url('/home/myprofile') }}" method="post" enctype="multipart/form-data">
                            @csrf  
                                   <div class="form-group">
                                          <div class="form-photo">
                                                 <div style="background: url({{ isset($user->picture) ? asset('storage/'.$user->picture) :  asset('assets/dist/img/user2-160x160.jpg') }}); background-size: cover;" class="img-thumbnail photo" id="photo_t"></div>
                                                 <input name="picture" type="file" class="form-control-file" id="form-photo">
                                                 <label for="form-photo" id="uploadBtn" class="uploadBtn">Select Photo</label>
                                          </div>
                                          
                                          <input name="id" type="hidden"  value="{{ $user->id }}">
                                   </div>
                                   <div class="form-group">
                                          <label for="form-full-name">Full Name</label>
                                          <input name="full-name" type="text" class="form-control" required placeholder="Full Name" value="{{ $user->name }}">
                                  
                                   </div>
                                   <div class="form-group">
                                          <label for="form-email">Email</label>
                                          <input type="email" class="form-control" id="form-email" placeholder="Email" value="{{ $user->email }}" readonly>
                                   </div>
                                   <div class="form-group">
                                          <label for="form-phone">Phone</label>
                                          <input name="phone" type="text" class="form-control" id="form-phone" placeholder="Phone" value="{{ isset($user->phone) ? $user->phone : "" }}">
                                   </div>
                                   <div class="form-biography mb-4">
                                          <label for="form-biography">Biography</label>
                                          <textarea name="biography" class="form-control" id="form-biography" rows="3" >{{ isset($user->biography) ? $user->biography : "" }}</textarea>
                                   </div>
                                   <button type="submit" class="btn-confirm-form">Submit</button>
                            </form>
                     </div>
              </div>
       </div>
@endsection