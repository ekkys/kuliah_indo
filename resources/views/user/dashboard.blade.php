@extends('layouts.user.main')
@section('title',' Dashboard')
@section('title-page', 'Dashboard User')

@section('content')
  <div class="col-xl-12">
    <div class="card mb-0">
      <div class="card-body">
        {{-- table --}}

        <div class="table-body">
          <table border="0" cellspacing="5" cellpadding="5">
            <tbody>
              <tr>
                <td>Filter by Date :</td>
                <td><input type="text" id="min" name="min" readonly placeholder="Minimum Date"></td>
                <td><input type="text" id="max" name="max" readonly placeholder="Maximum Date"></td>
              </tr>
            </tbody>
          </table>
          <table class="table table-striped" id="example3">
            <thead>
              <tr>
                <th scope="col">Course Name</th>
                <th scope="col">Start Date</th>
                <th scope="col">Course Progress</th>
                <th scope="col">Course Link</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href="{{ url('/class/singleClass') }}">Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</a></td>
                <td>2020/11/28</td>
                <td>Waiting</td>
                <td><a href="#courselink">Link</a></td>
              </tr>
              <tr>
                <td><a href="{{ url('/class/singleClass') }}">Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</a></td>
                <td>2021/10/09</td>
                <td>Session 2</td>
                <td><a href="#courselink">Link</a></td>
              </tr>
              <tr>
                <td><a href="{{ url('/class/singleClass') }}">Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</a></td>
                <td>2022/09/14</td>
                <td>End</td>
                <td><a href="#courselink">Link</a></td>
              </tr>
            </tbody>
          </table>
        </div>

        {{-- end table --}}
      </div>
    </div>
  </div>
@endsection