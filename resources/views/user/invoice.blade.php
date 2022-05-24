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
    <a href="{{ url('/certificate') }}" target="_blank" class="btn btn-primary">Cetak PDF</a>
    <div class="invoice-container">
        <div class="invoice-header">
            <div>
                <img src="{{ asset('mainWeb/images/logo/logo-colored.svg') }}" width="250">
            </div>
            <div>
                <h4 class="text-invoice">INVOICE</h4>
                <span>INV/{{ str_replace("-", "", $invoice->purchase_date) }}/{{ $invoice->user_id }}/{{ $invoice->penjadwalan_id }}/{{ $invoice->id }}</span>
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
                        <p>&nbsp; {{ $user->name }} &nbsp;</p>
                    </div>
                    <div class="section-wrapper">
                        <span>Purchase Date</span>
                        <p>&nbsp; {{ $invoice->purchase_date }} &nbsp;</p>
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
                                <a href="{{ url('/class/singleClass') }}" target="_blank" class="heading">{{ $invoice->penjadwalan_title }}</a>
                            </div>
                            <div class="course-price">
                                <p class="heading">Rp. {{ number_format($invoice->amount) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="invoice-price">
                <div class="total-amount">
                    <h6 class="heading-title">Total Amount</h6>
                    <h5 class="heading-price">Rp. {{ number_format($invoice->amount) }}</h5>
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
    <script>

    </script>
</body>
</html>