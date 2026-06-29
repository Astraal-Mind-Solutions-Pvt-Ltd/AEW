<!DOCTYPE html>
<html lang="en">
<?php 
include_once('header.php');
?>





    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
               <h1 class="display-3 text-white mb-3 animated slideInDown">Enquiry</h1>

<ol class="breadcrumb justify-content-center text-uppercase">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item text-white active" aria-current="page">Enquiry</li>
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
            <h6 class="text-primary text-uppercase">// Enquiry //</h6>
<h1 class="mb-5">Electric Bike & Service Enquiries in Goa</h1>
<p>
    Looking for <strong>electric bike services</strong>, 
    <strong>spare parts</strong>, 
    <strong>custom lithium batteries</strong>, or 
    <strong>expert guidance</strong>?  
    Submit your enquiry and our AEW specialists will assist you promptly.
</p>
</div>
        <div class="row g-4">
            <!-- Contact Info -->
            <div class="col-12">
                <div class="row gy-4">
                    <!-- <div class="col-md-4">
                        <div class="bg-light d-flex flex-column justify-content-center p-4">
                            <h5 class="text-uppercase">// Call Us At //</h5>
                          
                            <p class="m-0 mt-2"><i class="fa fa-phone-alt text-primary me-2"></i>+91 73505 97500</p>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-4">
                        <div class="bg-light d-flex flex-column justify-content-center p-4">
                            <h5 class="text-uppercase">// General Inquiry //</h5>
                            <p class="m-0">
                                <i class="fa fa-envelope-open text-primary me-2"></i>
                                <a href="mailto:support@aewelectricbikesgoa.com">support@aewelectricbikesgoa.com</a>
                            </p>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-4">
                        <div class="bg-light d-flex flex-column justify-content-center p-4">
                            <h5 class="text-uppercase">// Technical Support //</h5>
                            <p class="m-0">
                                <i class="fa fa-envelope-open text-primary me-2"></i>
                                <a href="mailto:tech@aewelectricbikesgoa.com">tech@aewelectricbikesgoa.com</a>
                            </p>
                        </div>
                    </div> -->
                </div>
            </div>

         <!-- Location Image -->
<div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
    <img
        src="img/e-bikes/images.jpeg"
        alt="AEW Electric Bikes Goa Showroom and Service Center"
        class="img-fluid position-relative rounded w-100 h-100"
        style="min-height: 350px; object-fit: cover;"
    >
</div>


            <!-- Contact Form -->
            <div class="col-md-6">
    <div class="wow fadeInUp" data-wow-delay="0.2s">
        <p class="mb-4">
            Looking for the right <strong>electric bike</strong> or need expert guidance?
            Share your requirements and our team will help you choose the perfect ride.
        </p>

   <form action="enquiry_form_processing.php" method="POST">


            <!-- identify form -->
            <input type="hidden" name="form_type" value="enquiry">

            <!-- redirect back here -->
            <input type="hidden" name="service_page" value="enquiry.php">

            <div class="row g-3">

                <!-- Name -->
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="customer_name" required>
                        <label>Your Name</label>
                    </div>
                </div>

                <!-- Phone -->
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="tel" class="form-control" name="customer_phone" required>
                        <label>Phone Number</label>
                    </div>
                </div>

                <!-- Address -->
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" name="address" style="height: 80px" required></textarea>
                        <label>Address</label>
                    </div>
                </div>

                <!-- Expected Range --><div class="col-12">
    <select name="expected_range"
            class="form-select"
            required
            style="height: 55px;">
        <option value="">Select Expected Range</option>
        <option value="Up to 70 kms">Up to 70 kms</option>
        <option value="Up to 100 kms">Up to 100 kms</option>
        <option value="Up to 130 kms">Up to 130 kms</option>
    </select>
</div>


                <!-- Message -->
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" name="message" style="height: 120px"></textarea>
                        <label>Message / Requirements</label>
                    </div>
                </div>

                <!-- Submit -->
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit">
                        Submit Enquiry
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>

<!--  -->
        </div>
    </div>
</div>
<!-- Contact End -->
<?php if (isset($_GET['enquiry'])): ?>
<div class="toast-container position-fixed top-50 start-50 translate-middle p-4" style="z-index: 9999;">

    <div id="enquiryToast"
         class="toast align-items-center text-white border-0 show
         <?php echo ($_GET['enquiry'] === 'success') ? 'bg-success' : 'bg-danger'; ?>"
         role="alert"
         aria-live="assertive"
         aria-atomic="true">

        <div class="d-flex">
            <div class="toast-body">
                <?php if ($_GET['enquiry'] === 'success'): ?>
                    <strong>
                        <i class="fa fa-check-circle me-2"></i>
                        Enquiry Submitted
                    </strong><br>
                    Thank you for reaching out. Our team will contact you shortly.
                <?php else: ?>
                    <strong>
                        <i class="fa fa-times-circle me-2"></i>
                        Enquiry Failed
                    </strong><br>
                    We couldn’t submit your enquiry. Please try again.
                <?php endif; ?>
            </div>

            <button type="button"
                    class="btn-close btn-close-white me-2 m-auto"
                    data-bs-dismiss="toast"
                    aria-label="Close"></button>
        </div>

    </div>

</div>
<?php endif; ?><script>
document.addEventListener("DOMContentLoaded", function () {
    const toastEl = document.getElementById('bookingToast');

    // Remove toast after 6 seconds
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


  <?php
include_once('footer.php');
?>
</body>

</html>