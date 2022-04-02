@extends('layouts.user.main')
@section('title',' Dashboard')
@section('title-page', 'My Course')

@section('content')
       <div class="col-xl-12">
              <div class="card mb-0">
                     <div class="card-body">
                            {{-- Seach Bar --}}
                            <div class="row">
                                   <div class="search-body col-12 col-lg-4">
                                          <div class="search-group">
                                                 <input type="text" class="form-control" placeholder="Type Keywords">
                                                 <button class="btn-search">
                                                        <span class="input-group-text" id="basic-addon2">
                                                               <i class="fas fa-search"></i>
                                                        </span>
                                                 </button>
                                          </div>
                                   </div>
                            </div>
                            {{-- end search bar --}}

                            {{-- table --}}
                            <div class="table-body">
                                   <table class="table table-striped">
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
                                              <td>Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</td>
                                              <td>Aug 12, 2022 | 09:00</td>
                                              <td>Aug 12, 2022 | 11:00</td>
                                              <td>Complete</td>
                                              <td>Waiting</td>
                                              <td><a href="#courselink">Link</a></td>
                                              <td><a href="#certificatelink">Download</a></td>
                                            </tr>
                                            <tr>
                                              <td>Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</td>
                                              <td>Aug 12, 2022 | 09:00</td>
                                              <td>Aug 12, 2022 | 11:00</td>
                                              <td>Complete</td>
                                              <td>Waiting</td>
                                              <td><a href="#courselink">Link</a></td>
                                              <td><a href="#certificatelink">Download</a></td>
                                            </tr>
                                            <tr>
                                              <td>Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</td>
                                              <td>Aug 12, 2022 | 09:00</td>
                                              <td>Aug 12, 2022 | 11:00</td>
                                              <td>Complete</td>
                                              <td>Waiting</td>
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