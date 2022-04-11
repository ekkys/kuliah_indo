@extends('layouts.user.main')
@section('title',' Dashboard')
@section('title-page', 'User Profile')

@section('content')
       <div class="col-xl-8">
              <div class="card mb-0">
                     <div class="card-body">
                            <h4 class="card-title">Edit Profile</h4>
                            <p class="card-title-desc">Please input corectly for adjusting the profile data</p>
                            <form action="{{ url('/home/siswa/myprofile') }}" method="post" enctype="multipart/form-data">
                             @csrf  
                                   <div class="form-group">
                                          <label for="form-photo">
                                                 <img src="{{ asset('/assets/dist/img/user2-160x160.jpg') }}" class="img-thumbnail mb-4">
                                          </label>
                                          <input type="file" class="form-control-file" id="form-photo" style="display: none">
                                   </div>
                                   <div class="form-group">
                                          <label for="form-full-name">Full Name</label>
                                          <input name="full-name" type="text" class="form-control"  placeholder="Full Name" value="{{ $user->name }}">
                                          <input name="id" type="hidden"  value="{{ $user->id }}">
                                  
                                   </div>
                                   <div class="form-group">
                                          <label for="form-email">Email</label>
                                          <input  type="email" class="form-control-plaintext" id="form-email" placeholder="Email" value="{{ $user->email }}" readonly>
                                   </div>
                                   <div class="form-group">
                                          <label for="form-phone">Phone</label>
                                          <input type="text" class="form-control" id="form-phone" placeholder="Phone" value="{{ isset($user->phone) ? $user->phone : "" }}">
                                   </div>
                                   <div class="form-biography mb-4">
                                          <label for="form-biography">Biography</label>
                                          <textarea class="form-control" id="form-biography" rows="3" >{{ isset($user->biography) ? $user->phone : "" }}</textarea>
                                   </div>
                                   <button type="submit" class="btn btn-confirm-form">Submit</button>
                            </form>
                     </div>
              </div>
       </div>
@endsection