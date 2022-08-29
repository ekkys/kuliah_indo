@extends('layouts.main')
@section('title',' Riwayat Pemesanan')
@section('title-page', 'Riwayat Pemesanan')

@section('content')
<div>
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
                <th>No</th>
                <th>Tanggal Pembelian</th>
                <th>Kelas</th>
                <th>Harga</th>
                <th>Nama</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach($histories as $history)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <?php 
                  $date = date('j F Y', strtotime($history->purchase_date));
                ?>
                <td>{{ $date }}</td>
                <td>{{ $history->penjadwalan_title }}</td>
                <td>Rp. {{ $history->amount }}</td>
                <td>{{ $history->user_name }}</td>
                <td>{{ $history->status }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
@endsection