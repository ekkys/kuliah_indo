@extends('layouts.user.main')
@section('title',' Dashboard')
@section('title-page', 'My Course')

@section('content')
       <div class="col-xl-12">
              <div class="card mb-0">
                     <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <span>{{ session('success') }}</span>
                                </div>
                            @endif
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
                                                               $todayDate = date('Y m d', strtotime('now +7 hours'));
                                                               $startDate = date('Y m d', strtotime($startDate));
                                                               $endDate = date('Y m d', strtotime($endDate));
                                                               $todayTime = (date('H:i', strtotime("+7 hours")));
                                                               $startTime = date('H:i', strtotime($startTime));
                                                               $endTime = date('H:i', strtotime($endTime));
                                                               $statusCourse = "";
                                                               

                                                               if ($todayDate >= $startDate && $todayDate <= $endDate) {
                                                                      if ($todayTime >= $startTime && $todayTime <= $endTime) {
                                                                             echo "In Progress";
                                                                      } elseif ($todayTime >= $endTime) {
                                                                             if ($todayTime > $endTime && $todayDate >= $endDate) {
                                                                             echo "Course End";
                                                                             $statusCourse = "Course End";
                                                                             } else {
                                                                                    echo "Course End";
                                                                             }
                                                                      } else {
                                                                             echo "Waiting";
                                                                      }
                                                               } elseif ($todayDate > $endDate) {
                                                                             echo "Course End";
                                                                             $statusCourse = "Course End";
                                                               } else {
                                                                      echo $todayDate;
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
                                                        <?php
                                                               if($statusCourse == "Course End") { 
                                                                      if(!empty($mycourse->comment_id)) {
                                                               
                                                        ?>
                                                               <a href="{{ url('/certificate/'.$mycourse->penjadwalan_id) }}">Download</a>
                                                        <?php
                                                                      } else {
                                                        ?>
                                                               <a href="{{ url('/comment/'.$mycourse->penjadwalan_id.'/'.$user->id) }}">Add Comment</a>
                                                        <?php
                                                                      }
                                                               } 
                                                        ?>
                                                               
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