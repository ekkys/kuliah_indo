@extends('layouts.main')
@section('title', 'Topic')
@section('title-page', 'Form Topic')


@section('content')
<!-- general form elements -->
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary" >
            <div class="card-header" style="background-color: rgb(253, 152, 1); color: white;">
                <h2 class="card-title" >Edit Data User</h2>
            </div>
            <!-- /.card-header -->
            
                <form action="{{ url('/manajemenuser') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control " id="name" name="name" readonly value="{{ $userList ? $userList->name : '' }}">
                        </div>
                        {{-- <div class="form-group">
                            <label for="profile">Profile</label>
                            <input type="text" class="form-control " id="profile" name="profile" value="{{ $userList ? $userList->picture : '' }}">
                        </div> --}}
                        <div class="form-group">
                            <div class="form-photo">
                                   <div style="background: url({{ isset($userList->picture) ? asset('storage/'.$userList->picture) :  asset('assets/dist/img/user2-160x160.jpg') }}); background-size: cover;" class="img-thumbnail photo" id="photo_t"></div>
                                   <label for="form-photo" id="removeBtn" class="uploadBtn" style="border: none">Remove Photo</label>
                                   <input type="hidden" name="picture" value="{{ $userList->picture }}">
                                   <input type="hidden" id="delete" name="delete" value="0">
                            </div>
                            
                            <input name="id" type="hidden"  value="{{ $userList->id }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control " id="email" name="email" readonly value="{{ $userList ? $userList->email : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control " id="phone" name="phone" readonly value="{{ $userList ? $userList->phone : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="biography">Biography</label>
                            <textarea class= "form-control" name="biography" id="biography" readonly cols="30" rows="10">{{ $userList ? $userList->biography : "" }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="roles">Role</label>
                            <select name="roles" id="roles" class="form-control">
                                @foreach($roleList as $role)

                                    @if ($userList->role == $role->id)
                                        <option value="{{ $role->id }}" id="role" selected>{{ $role->name }}</option>
                                    @else
                                        <option value="{{ $role->id }}" id="role">{{ $role->name }}</option>
                                    @endif

                                @endforeach

                                {{-- <option value="" selected disabled hidden>{{ $userList->roles_name }}</option>
                                <option value="2">Tutor</option>
                                <option value="3">Siswa</option>
                                <option value="4">Karyawan</option> --}}
                            </select>
                        </div>
                        <button type="submit" class="btn-confirm-form">Submit</button>
                    </div>
                </form>
            <!-- /.card-body -->
        </div>
    </div>
</div>
<!-- /.card -->
@endsection