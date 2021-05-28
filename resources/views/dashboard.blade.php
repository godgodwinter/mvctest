

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MVC - TEST</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset("Arsha/") }}/assets/img/favicon.png" rel="icon">
  <link href="{{ asset("Arsha/") }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("Arsha/") }}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset("Arsha/") }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset("Arsha/") }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset("Arsha/") }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset("Arsha/") }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset("Arsha/") }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset("Arsha/") }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset("Arsha/") }}/assets/css/style.css" rel="stylesheet">

  @yield('csshere')
  <!-- =======================================================
  * Template Name: Arsha - v4.1.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>



       <!-- ======= Pricing Section ======= -->
    <section id="harga" class="pricing">
        <div class="container">

          <div class="section-title">
            <h2>TEST MVC PHP</h2>
          </div>

          <div class="row">

            <div class="col-lg-2" >

            </div>

            <div class="col-lg-8 mt-8 mt-lg-0" >
              <div class="box featured">

                <a href="{{ asset("download/quotes.txt") }}" class="btn btn btn-warning mt-2 btn-sm">Lihat quotes.txt</a><form action="/reset" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn btn-danger mt-2 btn-sm"><span
                            class="pcoded-micon"> <i class="feather icon-delete"></i> RESET </span></button>
                </form>


                  <hr>

                  <a href="show" class="buy-btn btn btn-primary mt-2">Show</a>
                  <hr>
                <h3 class ="mt-4">Hasil</h3>
                  <hr>
{{-- {{ dd($datas) }} --}}
                  @foreach ($datas as $data)

                <h5 class ="mt-3">Peribahasa Hari ini</h5>

                  <p> {{ $data }}</p>
                  <i>
                  <p class ="mt-3">Posted {{ date('D F d-m-Y') }}</p>
                  </i>

                  <hr>

                  @endforeach

              </div>
            </div>

            <div class="col-lg-2 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">

            </div>

          </div>

        </div>
      </section><!-- End Pricing Section -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset("Arsha/") }}/assets/vendor/aos/aos.js"></script>
  <script src="{{ asset("Arsha/") }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset("Arsha/") }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset("Arsha/") }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset("Arsha/") }}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset("Arsha/") }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset("Arsha/") }}/assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset("Arsha/") }}/assets/js/main.js"></script>

</body>

</html>
