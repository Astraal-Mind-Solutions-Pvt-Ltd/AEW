<!DOCTYPE html>
<html lang="en">
<?php 
include_once('header.php');
?>





    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-5.avif);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                        <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


   <!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Contact Us //</h6>
            <h1 class="mb-5">Get in Touch with AEW Electric Bikes Goa</h1>
            <p>Have questions about our electric bikes, custom lithium batteries, or want to schedule a test ride? Contact our expert team today!</p>
        </div>
        <div class="row g-4">
            <!-- Contact Info -->
            <!-- Contact Info -->
<div class="col-12">
    <div class="row gy-4">

        <!-- Call -->
        <div class="col-md-4">
            <div class="bg-light d-flex flex-column justify-content-center p-4">
                <h5 class="text-uppercase">// Call Us At //</h5>
                <p class="m-0 mt-2">
                    <i class="fa fa-phone-alt text-primary me-2"></i>
                    +91 73505 97500
                </p>
            </div>
        </div>

        <!-- Location 1 -->
        <div class="col-md-4">
            <div class="bg-light d-flex flex-column justify-content-center p-4 location-btn"
                 onclick="changeMap('location1')"
                 style="cursor:pointer;">
                <h5 class="text-uppercase">// Location 1 //</h5>
                <p class="m-0">
                    <i class="fa fa-map-marker-alt text-primary me-2"></i>
                    AEW Electric Bikes – Location 1
                </p>
            </div>
        </div>

        <!-- Location 2 -->
        <div class="col-md-4">
            <div class="bg-light d-flex flex-column justify-content-center p-4 location-btn"
                 onclick="changeMap('location2')"
                 style="cursor:pointer;">
                <h5 class="text-uppercase">// Location 2 //</h5>
                <p class="m-0">
                    <i class="fa fa-map-marker-alt text-primary me-2"></i>
                    AEW Electric Bikes – Location 2
                </p>
            </div>
        </div>

    </div>
</div>

         <!-- Google Map -->
<div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
    <iframe
        id="mapFrame"
        class="position-relative rounded w-100"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3847.861697796635!2d73.92895557539207!3d15.32974938524769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfb7d8a9e84a29%3A0xe1bbecb3372db253!2sAEW%20ELECTRIC%20BIKE%20AND%20SERVICE%20CENTER%20(Multibrand%20Ebikes)!5e0!3m2!1sen!2sin!4v1759975799141!5m2!1sen!2sin"
        style="height:350px; border:0;"
        allowfullscreen
        loading="lazy">
    </iframe>
</div>


            <!-- Contact Form -->
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <p class="mb-4">Have a question or want to book a test drive for our multi-brand electric bikes? Fill out the form below and our team will get back to you quickly.</p>
                   <form action="forms.php" method="POST">

    <input type="hidden" name="form_type" value="contact">
    


    <div class="row g-3">

        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" name="customer_name" required>
                <label>Your Name</label>
            </div>
        </div>

       <div class="col-md-6">
    <div class="form-floating">
        <input type="tel" class="form-control" name="customer_phone" placeholder="Your Phone Number" required>
        <label>Your Phone Number</label>
    </div>
</div>


        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control" name="subject" required>
                <label>Subject</label>
            </div>
        </div>

        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control" name="message" style="height: 120px" required></textarea>
                <label>Message</label>
            </div>
        </div>

        <div class="col-12">
            <button class="btn btn-primary w-100 py-3" type="submit">
                Send Message
            </button>
        </div>

    </div>
</form>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Contact End -->
<?php if (isset($_GET['contact'])): ?>
<div class="toast-container position-fixed top-50 start-50 translate-middle p-4" style="z-index: 9999; min-width: 300px;">

    <div id="contactToast"
         class="toast align-items-center text-white border-0 show
         <?php echo ($_GET['contact'] === 'success') ? 'bg-success' : 'bg-danger'; ?>"
         role="alert"
         aria-live="assertive"
         aria-atomic="true">

        <div class="d-flex">
            <div class="toast-body">
                <?php if ($_GET['contact'] === 'success'): ?>
                    <strong>
                        <i class="fa fa-check-circle me-2"></i>
                        Message Sent
                    </strong><br>
                    Thank you for contacting us. Our team will reach you at your phone shortly.
                <?php else: ?>
                    <strong>
                        <i class="fa fa-times-circle me-2"></i>
                        Message Failed
                    </strong><br>
                    We couldn’t submit your message. Please check your details and try again.
                <?php endif; ?>
            </div>

            <button type="button"
                    class="btn-close btn-close-white me-2 m-auto"
                    data-bs-dismiss="toast"
                    aria-label="Close"></button>
        </div>

    </div>

</div>
<?php endif; ?>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const toastEl = document.getElementById('contactToast');

    // Auto-hide the toast after 6 seconds
    if (toastEl) {
        setTimeout(() => {
            toastEl.classList.remove('show');
        }, 6000);
    }

    // Clear the query string from the URL
    if (window.history.replaceState) {
        const cleanUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
        window.history.replaceState({}, document.title, cleanUrl);
    }
});
</script>
<script>
function changeMap(location) {
    const mapFrame = document.getElementById('mapFrame');

    if (location === 'location1') {
        mapFrame.src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3847.861697796635!2d73.92895557539207!3d15.32974938524769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfb7d8a9e84a29%3A0xe1bbecb3372db253!2sAEW%20ELECTRIC%20BIKE%20AND%20SERVICE%20CENTER%20(Multibrand%20Ebikes)!5e0!3m2!1sen!2sin!4v1759975799141!5m2!1sen!2sin";
    }

    if (location === 'location2') {
          mapFrame.src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3847.861697796635!2d73.92895557539207!3d15.32974938524769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfb7d8a9e84a29%3A0xe1bbecb3372db253!2sAEW%20ELECTRIC%20BIKE%20AND%20SERVICE%20CENTER%20(Multibrand%20Ebikes)!5e0!3m2!1sen!2sin!4v1759975799141!5m2!1sen!2sin";
   
    }
}
</script>

  <?php
include_once('footer.php');
?>
</body>

</html>