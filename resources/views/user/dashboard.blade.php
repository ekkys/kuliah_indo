@extends('layouts.user.main')
@section('title',' Dashboard')
@section('title-page', 'Dashboard User')

@section('content')
  <div class="col-xl-12">
    <div class="card mb-0">
      <div class="card-body">
        {{-- table --}}

        <div class="table-body" style="overflow: hidden">
          <div class="row">
            <div class="col-md-6 col-12" style="padding: 10px">
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>{{ $allCourses }}</h3>
                  <p>Courses</p>
                </div>
                <div class="icon">
                  <i class="nav-icon fas fa-book-open"></i>
                </div>
                <div class="row mb-2">
                  <div class="col-4 d-flex justify-content-center flex-column">
                    <div class="text-center">
                      {{ $waiting }}
                    </div>
                    <div class="text-center">
                      Waiting
                    </div>
                  </div>
                  <div class="col-4 d-flex justify-content-center flex-column">
                    <div class="text-center">
                      {{ $inProgress }}
                    </div>
                    <div class="text-center">
                      In Progress
                    </div>
                  </div>
                  <div class="col-4 d-flex justify-content-center flex-column">
                    <div class="text-center">
                      {{ $courseEnd }}
                    </div>
                    <div class="text-center">
                      Course End
                    </div>
                  </div>
                </div>
                <a href="{{ url('/home/mycourse') }}" class="small-box-footer">
                  More info <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-12" style="padding: 10px">
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>{{ $allPayments }}</h3>
                  <p>Payments</p>
                </div>
                <div class="icon">
                  <i class="nav-icon fas fa-file-invoice-dollar"></i>
                </div>
                <div class="row mb-2">
                  <div class="col-6 d-flex justify-content-center flex-column">
                    <div class="text-center">
                      {{ $pendingPayments }}
                    </div>
                    <div class="text-center">
                      Pending
                    </div>
                  </div>
                  <div class="col-6 d-flex justify-content-center flex-column">
                    <div class="text-center">
                      {{ $paidPayments }}
                    </div>
                    <div class="text-center">
                      Paid
                    </div>
                  </div>
                </div>
                <a href="{{ url('/home/payment') }}" class="small-box-footer">
                  More info <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        {{-- end table --}}
      </div>
    </div>
  </div>
@endsection