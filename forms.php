<?php
include_once('config.php');

// Block direct access
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$form_type = $_POST['form_type'] ?? '';

/* =========================
   BOOKING FORM
========================= */
if ($form_type === 'booking') {

    $customer_name    = trim($_POST['customer_name'] ?? '');
    $customer_phone   = trim($_POST['customer_phone'] ?? '');
    $selected_service = trim($_POST['selected_service'] ?? '');
    $service_date     = $_POST['service_date'] ?? null;
    $special_request  = trim($_POST['special_request'] ?? '');
    $service_page     = $_POST['service_page'] ?? 'contact.php';
    $booking_time     = date("Y-m-d H:i:s");

    $sql = "INSERT INTO ebike_service_bookings
            (customer_name, customer_phone, selected_service, service_date, special_request, booking_timestamp, service_page)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $coni->prepare($sql);
    $stmt->bind_param(
        "sssssss",
        $customer_name,
        $customer_phone,
        $selected_service,
        $service_date,
        $special_request,
        $booking_time,
        $service_page
    );

    if ($stmt->execute()) {
        header("Location: {$service_page}?booking=success#booking");
    } else {
        header("Location: {$service_page}?booking=error#booking");
    }

    exit;
}

/* =========================
   CONTACT FORM
========================= */
if ($form_type === 'contact') {

    $customer_name  = trim($_POST['customer_name'] ?? '');
    $customer_phone = trim($_POST['customer_phone'] ?? '');
    $subject        = trim($_POST['subject'] ?? '');
    $message        = trim($_POST['message'] ?? '');

    $sql = "INSERT INTO contact_messages
            (customer_name, customer_phone, subject, message)
            VALUES (?, ?, ?, ?)";

    $stmt = $coni->prepare($sql);
    $stmt->bind_param("ssss",
        $customer_name,
        $customer_phone,
        $subject,
        $message
    );

    if ($stmt->execute()) {
        header("Location: contact.php?contact=success");
    } else {
        header("Location: contact.php?contact=error");
    }

    exit;
}


/* =========================
   SUB-DEALERSHIP FORM
========================= */
if ($form_type === 'subdealership') {

    $full_name          = trim($_POST['full_name'] ?? '');
    $phone_number       = trim($_POST['phone_number'] ?? '');
    $email              = trim($_POST['email'] ?? '');
    $location_city      = trim($_POST['location_city'] ?? '');
    $applicant_type     = trim($_POST['applicant_type'] ?? '');
    $business_experience= trim($_POST['business_experience'] ?? '');
    $preferred_area     = trim($_POST['preferred_area'] ?? '');
    $message            = trim($_POST['message'] ?? '');

    $sql = "INSERT INTO sub_dealership_enquiries
            (full_name, phone_number, email, location_city, applicant_type, business_experience, preferred_area, message)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $coni->prepare($sql);
    $stmt->bind_param(
        "ssssssss",
        $full_name,
        $phone_number,
        $email,
        $location_city,
        $applicant_type,
        $business_experience,
        $preferred_area,
        $message
    );

    if ($stmt->execute()) {
        header("Location: about.php?status=success#apply");
    } else {
        header("Location: about.php?status=error#apply");
    }

    exit;
}
/* Fallback */
header("Location: index.php");
exit;