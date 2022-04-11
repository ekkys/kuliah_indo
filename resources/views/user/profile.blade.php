@extends('layouts.user.main')
@section('title',' Dashboard')
@section('title-page', 'User Profile')

@section('content')
       <div class="col-xl-8">
              <div class="card mb-0">
                     <div class="card-body">
                            <h4 class="card-title">Edit Profile</h4>
                            <p class="card-title-desc">Please input corectly for adjusting the profile data</p>
                            <form method="POST" action="">
                                   
                                   <div class="form-group">
                                          <label for="form-photo">
                                                 <div class="photo-wrapper">
                                                        <img src="{{ asset('/assets/dist/img/user2-160x160.jpg') }}" class="img-thumbnail">
                                                        <div class="photo-background">
                                                               <span class="img-text">Change Picture</span>
                                                        </div>
                                                 </div>
                                          </label>
                                          <input type="file" class="form-control-file" id="form-photo" style="display: none">
                                          <input type="hidden" name="id" value="{{ $user->id }}">
                                   </div>
                                   <div class="form-group">
                                          <label for="form-full-name">Full Name</label>
                                          <input type="text" class="form-control" id="form-full-name" aria-describedby="emailHelp" placeholder="Full Name" value={{$user->name}}>
                                   </div>
                                   <div class="form-group">
                                          <label for="form-email">Email</label>
                                          <input type="email" class="form-control-plaintext" id="form-email" placeholder="Email" value="{{$user->email}}" readonly>
                                   </div>
                                   <div class="form-group">
                                          <label for="form-phone">Phone</label>
                                          <input type="text" class="form-control" id="form-phone" placeholder="Phone" value="{{isset($user->phone) ? $user->phone : "" }}">
                                   </div>
                                   <div class="form-biography mb-4">
                                          <label for="form-biography">Biography</label>
                                          <textarea class="form-control" id="form-biography" rows="3" >{{isset($user->biography) ? $user->phone : "" }}</textarea>
                                   </div>
                                   <button type="submit" class="btn-confirm-form">Submit</button>
                            </form>
                     </div>
              </div>
       </div>
@endsection