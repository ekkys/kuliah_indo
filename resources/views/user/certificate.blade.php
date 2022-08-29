<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificate</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('mainWeb/images/favicon2.svg') }}" />
    <link rel="stylesheet" href="{{ asset('mainWeb/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="certificate-container">
        <div style="background: url({{ ENV('FILE_URL').$certificate->img }}); background-size: cover; width: 984px; height: 700px;" class="certificate-img">
            <div class="row" style="height: 170px">
                <div class="col-12"></div>
            </div>
            <div class="row">
                <div class="col-12 text-center align-items-end">
                    <div class="col-12">
                        <span style="font-size: 50px; font-weight: bold;">{{ $user->name }}</span>
                    </div>
                </div>
            </div>
            <div class="row" style="height: 60px">
                <div class="col-12"></div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="col-12 align-self-center" style="max-width: 50%; margin: auto; height: 180px">
                        <span style="font-size: 40px">{{ $penjadwalan->title }}</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6" style="padding-left: 90px">
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center certificate-id" style="padding-top: 55px">
                    <span>Certificate {{ $penjadwalan->id }}-{{ $user->id }}</span>
                    <?php
                        $date = explode( " - ", $penjadwalan->date);
                        $startDate = str_replace('/', '-', $date[0]);
                        $endDate = str_replace('/', '-', $date[1]);
                    ?>
                    <p>Issued {{ date('F d, Y', strtotime($endDate)) }}</p>
                </div>
            </div>
        </div>
        
    </div>
    
</body>
</html>