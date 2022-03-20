@extends('layouts.mainWeb.main')

@section('container')

    <section class="contact-area wow fadeInUp">
        <div class="container">
          <div class="section-header">
            <h2>Contact Us</h2>
            <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
          </div>
  
          <div class="row contact-info">
  
            <div class="col-md-4">
              <div class="contact-address">
                <i class="lni lni-pin"></i>
                <h3>Address</h3>
                <address>A108 Adam Street, NY 535022, USA</address>
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="contact-phone">
                <i class="lni lni-phone"></i>
                <h3>Phone Number</h3>
                <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="contact-email">
                <i class="lni lni-envelope"></i>
                <h3>Email</h3>
                <p><a href="mailto:info@example.com">info@example.com</a></p>
              </div>
            </div>
  
          </div>
        </div>
  
        <div class="container mb-4">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="container">
            <div class="search-wrapper">
                <div class="title-wrapper">
                    <h3 class="title wow fadeInUp">Mau Belajar Apa Hari ini?</h3>
                </div>
                <div class="search-container">
                    <div class="search-field">
                        <div class="search-inner">
                            <div class="search">
                                <input type="text" class="search-item" autocomplete="off" autocapitalize="off" placeholder="Ketik untuk mencari...">
                            </div>
                        </div>
                        <button class="btn-search" type="button">
                            <i class="lni lni-search-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
      </section>

    @include('partials.mainWeb.footer')

@endsection