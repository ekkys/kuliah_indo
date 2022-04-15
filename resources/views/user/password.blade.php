@extends('layouts.user.main')
@section('title',' Dashboard')
@section('title-page', 'Change Password')

@section('content')
       <div class="col-xl-8">
              <div class="card mb-0">
                     <div class="card-body">
                            <form method="POST" action="{{ url('/home/changepassword') }}">
                                   @csrf 
                                   <div class="form-group">
                                          <label for="form-old-password">Old Password</label>
                                          <input type="password" class="form-control" id="form_old_password" name="form_old_password" placeholder="Password" required>
                                   </div>
                                   <div class="form-group">
                                          <label for="form-new-password">New Password</label>
                                          <input type="password" class="form-control" id="form_new_password" name="form_new_password" placeholder="Password" required>
                                   </div>
                                   <div class="form-group">
                                          <label for="form-current-password">Current Password</label>
                                          <input type="password" class="form-control" id="form_current_password" name="form_current_password" placeholder="Password" required>
                                   </div>
                                   <button type="submit" class="btn-confirm-form">Submit</button>
                            </form>
                     </div>
              </div>
       </div>
@endsection