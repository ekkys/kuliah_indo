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
                                              <th scope="col">Time</th>
                                              <th scope="col">Course Progress</th>
                                              <th scope="col">Course Link</th>
                                              <th scope="col">Certificate</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                          @foreach ($mycourses as $mycourse)
                                          <tr>
                                                 <td><a href="{{ url('/class/singleClass/'.$mycourse->penjadwalan_id) }}">{{ $mycourse->penjadwalan_title }}</a></td>
                                                        <?php 
                     
                                                               $date = explode( " - ", $mycourse->penjadwalan_date);
                                                               $startDate = str_replace('/', '-', $date[0]);
                                                               $endDate = str_replace('/', '-', $date[1]);
                                                               $startTime = $mycourse->penjadwalan_timestart;
                                                               $endTime = $mycourse->penjadwalan_timeend;
                                                        
                                                        ?>
                                                 <td>{{ $mycourse->penjadwalan_date }}</td>
                                                 <td>{{ $startTime }} - {{ $endTime }}</td>
                                                 <td>
                                                        <?php
                                                               $currentTime = (date('H:i', strtotime("+7 hours")));
                                                               $statusCourse = "";

                                                               if (date('d-m-Y') >= $startDate && date('d-m-Y') < $endDate) {
                                                                      if($currentTime >= $startTime && $currentTime <= $endTime) {
                                                                             echo "On Progress";
                                                                      } elseif ($currentTime >= $endTime) {
                                                                             echo "Course End";
                                                                      } else {
                                                                             echo "Waiting";
                                                                      }
                                                               } elseif (date('d-m-Y') >= "$endDate") {
                                                                      if($currentTime >= $startTime && $currentTime <= $endTime) {
                                                                             echo "On Progress";
                                                                      } elseif($currentTime >= $endTime) {
                                                                             echo "Course End";
                                                                             $statusCourse = "Course End";
                                                                      } else {
                                                                             echo "Waiting";
                                                                      }
                                                               } else {
                                                                      echo "Waiting";
                                                               }

                                                                      
                                                        ?>
                                                 </td>
                                                 <td>
                                                        {!! $mycourse->penjadwalan_linkzoom ? 
                                                               '<span style="display: block;">
                                                                      <a href="https://'.$mycourse->penjadwalan_linkzoom.'" target="_blank">Link</a>
                                                               </span>'
                                                               :
                                                               '<span>
                                                                      Link Not Ready
                                                               </span>'
                                                        !!}
                                                 </td>
                                                 <td>   
                                                        <?php if($statusCourse == "Course End") { ?>
                                                               <a href="{{ url('/certificate/'.$mycourse->penjadwalan_id) }}">Download</a>
                                                        <?php } ?>
                                                               
                                                 </td>
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