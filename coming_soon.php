<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electric Bikes & Scooters in Goa | Coming Soon - E-Bike Dealership</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Exciting new electric bikes and scooters coming soon to Goa! Explore no-license e-scooters, e-bike servicing for OLA, Ather, Komaki, and genuine electric vehicle parts and accessories.">
    <meta name="keywords" content="Electric bikes Goa, e-scooter Goa, low speed e-bikes, no license scooters, electric bike service Goa, OLA servicing, Komaki service, Ather service, e-bike parts, EV lubricants Goa">
    <meta name="author" content="E-Bike Dealership Goa">


    <meta charset="utf-8">
    <title>AEW Electric Bikes Goa - Buy, Servicing & Custom Lithium Batteries</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicons/apple-touch-icon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

   




<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/e-bikes/header.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Coming Soon</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
                    <!-- <li class="breadcrumb-item text-white active" aria-current="page">Coming Soon</li> -->
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->
<!-- Coming Soon Start -->
<div class="container-xxl py-5 wow fadeInUp position-relative" data-wow-delay="0.5s" style="overflow: hidden;">
  <div class="container text-center position-relative" style="z-index: 1;">
    <div class="col-lg-8 mx-auto">
      <i class="bi bi-gear-wide-connected display-1 text-primary mb-4"></i>

      <h1 class="display-4 fw-bold text-dark">
        ⚡ Our <span class="text-primary">Website</span> Is Coming Soon!
      </h1>

      <p class="lead mb-4">
        We're excited to announce that our <strong>official website</strong> is under development!  
        While our <strong>Goa showroom</strong> is fully operational and open to serve you,  
        we’re building a digital space where you can explore our complete range of  
        <strong>electric scooters, e-bikes, and accessories</strong> — all in one place.
      </p>

      <!-- Highlight Section Instead of Timer -->
      <div class="bg-light rounded-3 p-4 shadow-sm mb-4">
        <h5 class="fw-semibold text-primary mb-2">Coming Soon Features:</h5>
        <ul class="list-unstyled mb-0 text-dark">
          <li>⚡ Online Service Booking</li>
          <li>🛵 Explore Latest E-Bike Models</li>
          <li>🔧 Genuine Parts & Accessories</li>
          <li>💬 Easy Support & Assistance</li>
        </ul>
      </div>

      <!-- Animated E-Bike -->
      <div class="bike-container my-6">
        <img src="img/e-bikes/coming_soon_e-bike.jpg" alt="Electric Scooter Goa" class="moving-bike">
      </div>

      <!-- Disabled Button -->
      <a class="btn btn-primary rounded-pill py-3 px-5 disabled" href="#" tabindex="-1" aria-disabled="true">
        Coming Soon
      </a>

      <p class="text-muted mt-3">
        Visit our <strong>Goa store</strong> today to experience the ride of the future.
      </p>
    </div>
  </div>
</div>
<!-- Coming Soon End -->



<!-- Bike Animation CSS -->
<style>
.bike-container {
  position: relative;
  width: 100%;
  height: 200px;
  overflow: hidden;
}

.moving-bike {
  position: absolute;
  bottom: 0;
  left: -200px;
  width: 220px;
  animation: rideBike 10s linear infinite;
}

@keyframes rideBike {
  0% { left: -250px; transform: scaleX(1); }
  45% { left: calc(100% + 50px); transform: scaleX(1); }
  50% { left: calc(100% + 50px); transform: scaleX(-1); }
  95% { left: -250px; transform: scaleX(-1); }
  100% { left: -250px; transform: scaleX(1); }
}
</style>

<!-- Countdown Script -->
<script>
const targetDate = new Date("2025-11-30T00:00:00").getTime();

const timer = setInterval(function() {
  const now = new Date().getTime();
  const distance = targetDate - now;

  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
  const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("countdown").innerHTML = 
      days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

  if (distance < 0) {
    clearInterval(timer);
    document.getElementById("countdown").innerHTML = "We're Live! 🚀";
  }
}, 1000);
</script>

</body>
</html>
