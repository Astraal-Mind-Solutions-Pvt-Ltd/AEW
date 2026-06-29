<?php
$currentPage = basename($_SERVER['PHP_SELF']);

/* Dynamic Title + Description */
if($currentPage == 'about.php'){
    $pageTitle = "About AEW Electric Bikes Goa | Electric Scooter Sales & Service";
    $pageDescription = "Learn about AEW Electric Bikes Goa – your trusted electric scooter dealer offering sales, servicing and custom lithium battery solutions in Goa.";
}
elseif($currentPage == 'service.php'){
    $pageTitle = "Electric Bike Servicing in Goa | Lithium Battery Repair | AEW";
    $pageDescription = "Professional electric scooter servicing, lithium battery repair and maintenance in Goa. Visit AEW Electric Bikes for reliable EV solutions.";
}
elseif($currentPage == 'ebikes.php'){
    $pageTitle = "Buy Electric Scooters in Goa | Latest EV Models | AEW Electric Bikes";
    $pageDescription = "Explore the latest electric scooters in Goa at AEW Electric Bikes. Affordable pricing, eco-friendly rides and expert guidance available.";
}
elseif($currentPage == 'contact.php'){
    $pageTitle = "Contact AEW Electric Bikes Goa | Book Demo Ride";
    $pageDescription = "Contact AEW Electric Bikes in Goa to book a demo ride, inquire about electric scooters, servicing or lithium battery solutions.";
}
else { // index.php
    $pageTitle = "AEW Electric Bikes Goa | Buy, Service & Custom Lithium Batteries";
    $pageDescription = "AEW Electric Bikes Goa offers electric scooter sales, servicing, demo rides and custom lithium battery solutions. Visit us today.";
}

/* Canonical */
if($currentPage == 'index.php'){
    $canonicalURL = "https://www.aewelectricbikesgoa.com/";
} else {
    $canonicalURL = "https://www.aewelectricbikesgoa.com/".$currentPage;
}
?>

<head>
    <meta charset="utf-8">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo $canonicalURL; ?>">

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

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <!-- <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>123 Street, New York, USA</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Topbar End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <!-- Image Logo -->
        <img src="img/e-bikes/logo3.png" alt="AEW Electric Bikes Logo" style="height: 89.5px; width:autox; ;">
        <!-- <h4 class="m-0 text-primary d-inline">A.E.W Electric Bikes</h4> -->
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
           <?php 
  $current_page = basename($_SERVER['PHP_SELF']);
?><a href="index.php" class="nav-item nav-link <?= ($current_page == 'index.php') ? 'active' : '' ?>">Home</a>
<!-- <a href="about.php" class="nav-item nav-link <?= ($current_page == 'about.php') ? 'active' : '' ?>">About</a> -->
<a href="ebikes.php" class="nav-item nav-link <?= ($current_page == 'ebikes.php') ? 'active' : '' ?>">E-Bikes</a>
<!-- <a href="service.php" class="nav-item nav-link <?= ($current_page == 'service.php') ? 'active' : '' ?>">Services & Maintenance</a> -->
<!-- <a href="parts.php" class="nav-item nav-link <?= ($current_page == 'parts.php') ? 'active' : '' ?>">Parts & Accessories</a> -->
<a href="contact.php" class="nav-item nav-link <?= ($current_page == 'contact.php') ? 'active' : '' ?>">Contact</a>

        </div>
        <a href="https://api.whatsapp.com/send?phone=919945101240&text=Hello%2C%20I%20am%20interested%20in%20booking%20a%20Demo%20Ride%20for%20an%20e-bike."
   target="_blank"
   rel="noopener noreferrer"
   class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">
   Book A Demo Ride <i class="fa fa-arrow-right ms-3"></i>
</a> </div>
</nav>
<!-- Navbar End -->
