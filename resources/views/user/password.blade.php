@extends('layouts.user.main')
@section('title',' Dashboard')
@section('title-page', 'Change Password')

@section('content')
       <div class="col-xl-8">
              <div class="card mb-0">
                     <div class="card-body">
                            @if(session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <span>{{ session('error') }}</span>
                                </div>
                            @endif
                            <form method="POST" action="{{ url('/home/changepassword') }}">
                                   @csrf 
                                   {{-- old password --}}
                                   <div class="form-group">
                                          <label for="oldPassword">Old Password</label>
                                          <input type="password" class="form-control" id="form_old_password" name="oldPassword" placeholder="Password" required minlength="8" maxlength="24">
                                   </div>
                                   
                                   {{-- new password --}}
                                   <div class="form-group">
                                          <label for="newPassword">New Password</label>
                                          <input type="password" class="form-control" id="form_new_password" name="newPassword" placeholder="Password" required minlength="8" maxlength="24">
                                   </div>
                                   
                                   {{-- current password --}}
                                   <div class="form-group">
                                          <label for="currentPassword">Confirm Password</label>
                                          <input type="password" class="form-control" id="form_current_password" name="currentPassword" placeholder="Password" required minlength="8" maxlength="24">
                                   </div>
                                   @error('currentPassword')
                                   <span class="text-danger">{{ $message }}</span>
                                   @enderror

                                   <button type="submit" class="btn-confirm-form">Submit</button>
                            </form>
                     </div>
              </div>
       </div>
@endsection