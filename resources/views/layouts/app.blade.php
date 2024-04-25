<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('public/logo/favicon.png') }}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Font Awasome CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

  </head>
  <body>


    <style>
      .container-xl {
          overflow-x: hidden;
      }
      .nav-link{
        color: white;
      }
  </style>


    {{-- Top Nav End --}}


    
        
    



    {{-- Navbar Start --}}
    <nav class="navbar navbar-expand-lg navbar-light " style="background: #1E90FF;">
        <a class="navbar-brand" style="color: white;" href=""><i class="fa fa-home" aria-hidden="true"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link"  style="color: white;" href="">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"style="color: white;" href="">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"style="color: white;" href="">Locations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white;" href="">Contact</a>
            </li>  
          </ul>
          
        
        </div>
    </nav>

{{-- Navbar end --}}


{{-- Main Content --}}
<!-- <div class="container-xl"> -->
    @yield('content')

</div>

{{-- Main content end --}}

    {{-- Footer start --}}
    <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container-xl">
    <!-- Footer -->
    <footer
            class="text-center text-lg-start text-dark"
            style="background-color: #ECEFF1"
            >
      
  
      <!-- Section: Links  -->
      <section class="d-flex">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold">Location</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px"/>
              <p style="text-align: justify;">
                This is demo Website For Ajax call work.<br>
                
                </p>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">GENERAL LINKS</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
                <a href=" class="text-dark">HOME</a>
              </p>
              <p>
                <a href="" class="text-dark">ABOUT US</a>
              </p>
              <p>
                <a href="" class="text-dark">Locations</a>
              </p>
              <p>
                <a href="" class="text-dark">CONTACT US</a>
              </p>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            {{-- <div class="col-md-4 col-lg-5 col-xl-4 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">BEST SELLERS</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
                <p style="font-size: small; text-align: justify;">
                    <a href="#" class="text-dark">Marine Mining Market 2030 By Resource Type (Polymetallic Nodules, Polymetallic Sulfides, Cobalt-Rich Ferromanganese Crusts), Mining Method (Seabed Crawlers, ROVs, Hydraulic Suction Systems, Vertical Transport Systems), Depth of Operation, End-Use Industry & Region - Partner & Customer Ecosystem (Product Services, Proposition & Key Features) Competitive Index & Regional Footprints by MarketDigits</a>
                </p>
                
              
            </div> --}}
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Contact</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p><i class="fas fa-home mr-3"></i> Pune, Maharashtra, India</p>
              <p><i class="fas fa-envelope mr-3"></i>deepakhawale3@gmail.com</p>
              
              <p><i class="fas fa-print mr-3"></i> +91-8421-030-138</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->
  
      <!-- Copyright -->
      <div
           class="text-center p-3"
           style="background: #1E90FF; color: white;"
           >
        © 2024 Copyright:
        <a style="color: white;" href=""
           >Location</a
          >
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </div>
  <!-- End of .container -->
    {{-- Footer end --}}
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    

    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>