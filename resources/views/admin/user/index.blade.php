@extends('layouts.main')
@section('title',' Jadwal')
@section('title-page', 'Data Jadwal Kelas')

@section('content')
<?php if(empty(Auth::user())) { ?>
  <script>window.location.href = "/login"</script>
<?php } elseif(Auth::user()->email !== "admin@role.test") { ?>
  <script>window.location.href = "/home"</script>
<?php } ?>
<div class="row">
    <div class="col-12">
      <div class="card">
        {{-- <div class="card-header">
          <h3 class="card-title"></h3>
        </div> --}}
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Profile</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Biography</th>
                <th>Role</th>
                <th width='100'>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($usersList as $userList)
              <tr>
                <td>{{ $userList->id }}</td>
                <td>{{ $userList->name }}</td>
                <td>
                  @if(!empty($userList->picture))
                    <img width="60px" height="60px" src="{{ env('FILE_URL').$userList->picture }}" class="d-block" style="object-fit: cover">
                  @else
                    <img width="60px" height="60px" src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="d-block">
                  @endif
                </td>
                <td>{{ $userList->email }}</td>
                <td>{{ $userList ? $userList->phone : ""}}</td>
                <td>{{ $userList ? $userList->biography : ""}}</td>
                <td>{{ $userList->roles_name }}</td>
                <td>
                    <a class="btn btn-sm" href="{{ url('/manajemenuser') }}/{{ $userList->id }}/edit" style="background-color: rgb(12, 173, 165); color: white; display:inline;"><i class="fas fa-pencil" aria-hidden="true"></i> Edit</a>
                    <form action="{{ url('/manajemenuser') }}/{{ $userList->id }}" method="post" class="d-inline">
                      @csrf
                      <button class="btn btn-sm" onclick="return confirm('Are you sure want to delete {{ $userList->email }}?') " style="background-color: rgb(252, 0, 0); color: white; display:inline;">Hapus</button>
                   </form>
                  </td>
              </tr>
              @endforeach
              
            </tbody>
            <tfoot>
              <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Profile</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Biography</th>
                <th>Role</th>
                <th width='100'>Aksi</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
@endsection

