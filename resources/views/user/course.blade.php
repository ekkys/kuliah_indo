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
                                              <th scope="col">Date</th>
                                              <th scope="col">Payment Status</th>
                                              <th scope="col">Course Progress</th>
                                              <th scope="col">Course Link</th>
                                              <th scope="col">Certificate</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                          @foreach ($penjadwalans as $penjadwalan)
                                          <tr>
                                                 <td><a href="{{ url('/class/singleClass') }}">{{ $penjadwalan->title }}</a></td>
                                                 <?php 
                    
                                                        $date = explode( " - ", $penjadwalan->date);
                                                        $startDate = str_replace('/', '-', $date[0]);
                                                        $endDate = str_replace('/', '-', $date[1]);
                                                        $startTime = $penjadwalan->timestart;
                                                        $endTime = $penjadwalan->timeend;
                                                 
                                                 ?>
                                                 <td>{{ $penjadwalan->date }}</td>
                                                 <td>Complete</td>
                                                 <td>Waiting</td>
                                                 <td>
                                                        <span style="display: block;">
                                                               <a href="#courselink">Link</a>
                                                        </span>
                                                 </td>
                                                 <td><a href="{{ url('/certificate/'.$penjadwalan->id) }}">Download</a></td>
                                               </tr>
                                             </tbody>
                                                 
                                          @endforeach
                                   </table>
                            </div>
                            {{-- end table --}}
                     </div>
              </div>
       </div>
@endsection