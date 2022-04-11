@extends('layouts.user.main')
@section('title',' Dashboard')
@section('title-page', 'My Course')

@section('content')
       <div class="col-xl-12">
              <div class="card mb-0">
                     <div class="card-body">
                            {{-- table --}}
                            <div class="table-body">
                                   <table class="table table-striped" id="example3">
                                          <thead>
                                            <tr>
                                              <th scope="col">Course Name</th>
                                              <th scope="col">Start Date</th>
                                              <th scope="col">End Date</th>
                                              <th scope="col">Payment Status</th>
                                              <th scope="col">Course Progress</th>
                                              <th scope="col">Course Link</th>
                                              <th scope="col">Certificate</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                                 <td><a href="{{ url('/class/singleClass') }}">Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</a></td>
                                                 <td>Aug 12, 2022 | 09:00</td>
                                                 <td>Aug 12, 2022 | 11:00</td>
                                                 <td>Complete</td>
                                                 <td>Waiting</td>
                                                 <td><a href="#courselink">Link</a></td>
                                                 <td><a href="#certificatelink">Download</a></td>
                                            </tr>
                                            <tr>
                                                 <td><a href="{{ url('/class/singleClass') }}">Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</a></td>
                                                 <td>Apr 3, 2022 | 09:00</td>
                                                 <td>Apr 17, 2022 | 11:00</td>
                                                 <td>Complete</td>
                                                 <td>Session 2</td>
                                                 <td><a href="#courselink">Link</a></td>
                                                 <td><a href="#certificatelink">Download</a></td>
                                               </tr>
                                               <tr>
                                                    <td><a href="{{ url('/class/singleClass') }}">Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</a></td>
                                                    <td>Mar 4, 2022 | 09:00</td>
                                                    <td>Mar 4, 2022 | 11:00</td>
                                                    <td>Complete</td>
                                                    <td>End</td>
                                                    <td><a href="#courselink">Link</a></td>
                                                    <td><a href="#certificatelink">Download</a></td>
                                               </tr>
                                          </tbody>
                                   </table>
                            </div>
                            {{-- end table --}}
                     </div>
              </div>
       </div>
@endsection