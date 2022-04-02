@extends('layouts.user.main')
@section('title',' Dashboard')
@section('title-page', 'Payment')

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
                                              <th scope="col">Payment Number</th>
                                              <th scope="col">Course Name</th>
                                              <th scope="col">Purchase Date</th>
                                              <th scope="col">Payment</th>
                                              <th scope="col">Payment Status</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>#1003524841</td>
                                              <td>Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</td>
                                              <td>Aug 12, 2022</td>
                                              <td>Rp 499.000</td>
                                              <td>Waiting</td>
                                            </tr>
                                            <tr>
                                              <td>#1003524841</td>
                                              <td>Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</td>
                                              <td>Aug 12, 2022</td>
                                              <td>Rp 499.000</td>
                                              <td>Waiting</td>
                                            </tr>
                                            <tr>
                                              <td>#1003524841</td>
                                              <td>Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</td>
                                              <td>Aug 12, 2022</td>
                                              <td>Rp 499.000</td>
                                              <td>Waiting</td>
                                          </tr>
                                          </tbody>
                                   </table>
                            </div>
                            {{-- end table --}}
                     </div>
              </div>
       </div>
@endsection