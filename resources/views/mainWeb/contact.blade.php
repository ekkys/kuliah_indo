@extends('layouts.mainWeb.main')

@section('container')

    <section class="contact-area wow fadeInUp">
        <div class="container">
          <div class="section-header mb-3 text-center">
            <h2>Hubungi Kami</h2>
          </div>
  
          <div class="row contact-info">
  
            <div class="col-md-4">
              <div class="contact-address">
                <i class="lni lni-pin"></i>
                <h3>Alamat</h3>
                <address>Cilegon, Banten</address>
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="contact-phone">
                <i class="lni lni-phone"></i>
                <h3>No. Telp.</h3>
                <p><a href="tel:+6285848735048">+62 858 4873 5048</a></p>
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="contact-email">
                <i class="lni lni-envelope"></i>
                <h3>Email</h3>
                <p><a href="mailto:kuliahindonesia2020@gmail.com">kuliahindonesia2020@gmail.com</a></p>
              </div>
            </div>
  
          </div>

          <div class="row contact-info">
  
            <div class="col-md-6">
              <div class="contact-twitter">
                <i class="lni lni-twitter"></i>
                <h3>Twitter</h3>
                <p><a href="https://twitter.com/Kuliah_indo">Kuliah Indonesia</a></p>
              </div>
            </div>
  
            <div class="col-md-6">
              <div class="contact-instagram">
                <i class="lni lni-instagram-original"></i>
                <h3>Instagram</h3>
                <p><a href="https://www.instagram.com/kuliah_indo/">Kuliah Indonesia ID</a></p>
              </div>
            </div>
  
          </div>
        </div>

        <div class="container">
            <div class="search-wrapper">
                <div class="title-wrapper">
                    <h3 class="title wow fadeInUp">Subscribe untuk dapatkan informasi terbaru</h3>
                </div>
                <div class="search-container">
                    <div class="search-field">
                        <div class="search-inner">
                            <div class="search">
                                <input type="text" class="search-item" autocomplete="off" autocapitalize="off" placeholder="Email Address">
                            </div>
                        </div>
                        <button class="btn-search" type="button">
                            <span class="subscribe">Subscribe</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
  
        <div class="container mb-5">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253959.80974306673!2d105.86475673460625!3d-5.977930217220849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41903819290ab7%3A0x5f5c4dbfc123deee!2sCilegon%20City%2C%20Banten!5e0!3m2!1sen!2sid!4v1647573200295!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        
      </section>

@endsection