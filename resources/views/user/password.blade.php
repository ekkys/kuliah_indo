@extends('layouts.user.main')
@section('title',' Dashboard')
@section('title-page', 'Change Password')

@section('content')
       <div class="col-xl-8">
              <div class="card mb-0">
                     <div class="card-body">
                            <form>
                                   <div class="form-group">
                                          <label for="form-old-password">Old Password</label>
                                          <input type="password" class="form-control" id="form-old-password" placeholder="Password">
                                   </div>
                                   <div class="form-group">
                                          <label for="form-new-password">New Password</label>
                                          <input type="password" class="form-control" id="form-new-password" placeholder="Password">
                                   </div>
                                   <div class="form-group">
                                          <label for="form-current-password">Current Password</label>
                                          <input type="password" class="form-control" id="form-current-password" placeholder="Password">
                                   </div>
                                   <button type="submit" class="btn btn-confirm-form">Submit</button>
                            </form>
                     </div>
              </div>
       </div>
@endsection