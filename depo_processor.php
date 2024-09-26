<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

// Load PHPMailer classes
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

// Get deposit data from the form
$email_id = $_POST["email_id"];
$amount_dep = $_POST["amount_dep"];

include_once "./database_connection.php";

// Insert the deposit into the database
$sql = "INSERT INTO alpha_table(email_id, amount_dep, date_depo) VALUES(:email_id, :amount_dep, now())";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    "email_id" => $email_id,
    "amount_dep" => $amount_dep
]);

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  // Set the SMTP server to use Gmail's server
    $mail->SMTPAuth = true;
    $mail->Username = 'your-email@gmail.com';  // Your Gmail address
    $mail->Password = 'your-email-password';  // Your Gmail password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Recipients
    $mail->setFrom('noreply@yourwebsite.com', 'Your Website');
    $mail->addAddress('admin@example.com');  // Your admin email address

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'User Deposit Notification';
    $mail->Body    = "User with email: " . $email_id . " has deposited $" . $amount_dep . ".";

    // Send the email
    $mail->send();
    echo "<script>alert('Deposit successful and notification sent!'); document.location = 'indexx.php';</script>";
} catch (Exception $e) {
    echo "<script>alert('Deposit successful, but notification failed. Error: {$mail->ErrorInfo}'); document.location = 'indexx.php';</script>";
}
