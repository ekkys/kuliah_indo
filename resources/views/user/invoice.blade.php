<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('mainWeb/images/favicon2.svg') }}" />
    <link rel="stylesheet" href="{{ asset('mainWeb/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="invoice-container">
        <div class="invoice-header">
            <div>
                <img src="{{ asset('mainWeb/images/logo/logo-colored.svg') }}" width="250">
            </div>
            <div>
                <h4 class="text-invoice">INVOICE</h4>
                <span>INV/20220308/COU/1003528254</span>
            </div>
        </div>
        <div>
            <div class="invoice-recipient">
                <div class="buyer-section">
                    <div class="section-wrapper">
                        <p class="header">TO</p>
                    </div>
                    <div class="section-wrapper">
                        <span>Buyer name</span>
                        <p>&nbsp; Cevin Leonardo &nbsp;</p>
                    </div>
                    <div class="section-wrapper">
                        <span>Purchase Date</span>
                        <p>&nbsp; August 12, 2022 &nbsp;</p>
                    </div>
                </div>
            </div>
            <div class="invoice-item">
                <div class="item-header">
                    <div class="course-name">COURSE NAME</div>
                    <div class="course-price">AMOUNT</div>
                </div>
                <div class="item-body">
                    <div class="item-product">
                        <div class="section-product">
                            <div class="course-name">
                                <a href="{{ url('/class/singleClass') }}" target="_blank" class="heading">Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</a>
                            </div>
                            <div class="course-price">
                                <p class="heading">Rp 499.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-product">
                        <div class="section-product">
                            <div class="course-name">
                                <a href="{{ url('/class/singleClass') }}" target="_blank" class="heading">Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</a>
                            </div>
                            <div class="course-price">
                                <p class="heading">Rp 499.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-product">
                        <div class="section-product">
                            <div class="course-name">
                                <a href="{{ url('/class/singleClass') }}" target="_blank" class="heading">Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</a>
                            </div>
                            <div class="course-price">
                                <p class="heading">Rp 499.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="invoice-price">
                <div class="total-amount">
                    <h6 class="heading-title">Total Amount</h6>
                    <h5 class="heading-price">Rp 1.497.000</h5>
                </div>
            </div>
        </div>
        <div class="invoice-bottom">
            <p class="heading">
                Thank you for your purchase.
                <br>
                Please <strong>Our Number</strong> if you need some help.
            </p>
        </div>
    </div>
</body>
</html>