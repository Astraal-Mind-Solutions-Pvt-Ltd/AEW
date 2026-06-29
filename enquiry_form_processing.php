<?php
include_once('config.php');

// Block direct access
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$form_type = $_POST['form_type'] ?? '';

if ($form_type === 'enquiry') {

    $customer_name   = trim($_POST['customer_name'] ?? '');
    $customer_phone  = trim($_POST['customer_phone'] ?? '');
    $address         = trim($_POST['address'] ?? '');
    $expected_range  = trim($_POST['expected_range'] ?? '');
    $message         = trim($_POST['message'] ?? '');
    $service_page    = $_POST['service_page'] ?? 'enquiry.php';

    $enquiry_time   = date("Y-m-d H:i:s");
    $enquiry_status = 'N'; // default = N

    /* =========================
       STEP 1: INSERT INTO DB
    ========================= */

    $sql = "INSERT INTO ebike_enquiries
            (customer_name, customer_phone, address, expected_range, message, service_page, enquiry_status, enquiry_timestamp)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $coni->prepare($sql);
    $stmt->bind_param(
        "ssssssss",
        $customer_name,
        $customer_phone,
        $address,
        $expected_range,
        $message,
        $service_page,
        $enquiry_status,
        $enquiry_time
    );

    $db_inserted = $stmt->execute();
    $enquiry_id  = $stmt->insert_id ?? 0;

    /* =========================
       STEP 2: SEND EMAIL
    ========================= */

    $email_sent = false;

    if ($db_inserted) {

        $to      = "shrutya1992@gmail.com";
        $subject = "New E-Bike Enquiry | AEW Electric Bikes Goa";

        $email_body = "
New Enquiry Received

Name           : $customer_name
Phone          : $customer_phone
Address        : $address
Expected Range : $expected_range

Message:
$message
";

        $headers  = "From: AEW Electric Bikes <no-reply@aewelectricbikesgoa.com>\r\n";
        $headers .= "Reply-To: $customer_phone\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        $email_sent = mail($to, $subject, $email_body, $headers);
    }

  /* =========================
   STEP 3: SET FINAL FLAG
========================= */

if ($db_inserted && $email_sent) {
    $enquiry_status = 'Y';
} elseif ($db_inserted && !$email_sent) {
    $enquiry_status = 'E';
} else {
    $enquiry_status = 'N';
}

/* =========================
   STEP 4: UPDATE FLAG (SAFE)
========================= */

if ($db_inserted) {
    $update = $coni->prepare(
        "UPDATE ebike_enquiries 
         SET enquiry_status = ? 
         WHERE id = LAST_INSERT_ID()"
    );
    $update->bind_param("s", $enquiry_status);
    $update->execute();
}

    /* =========================
       REDIRECT
    ========================= */

    if ($enquiry_status === 'Y') {
        header("Location: {$service_page}?enquiry=success#enquiry");
    } elseif ($enquiry_status === 'E') {
        header("Location: {$service_page}?enquiry=email_failed#enquiry");
    } else {
        header("Location: {$service_page}?enquiry=error#enquiry");
    }

    exit;
}

/* Fallback */
header("Location: index.php");
exit;
