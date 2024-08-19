<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if(isset($_POST['submit']) || isset($_POST['send'])) {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'rachit23porwal@gmail.com';
        $mail->Password = '****************';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->SMTPDebug = 0;

        if (isset($_POST['submit'])) {
            $name = $_POST['fullName'];
            $email = $_POST['email'];
            $date = $_POST['rentDate'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];

            $mail->setFrom('rachit23porwal@gmail.com', 'EasyRide');
            $mail->addAddress($email, $name);

            $mail->isHTML(true);
            $mail->Subject = 'EasyRide Booking Confirmation';
            $mail->Body = "Hello $name, <br>Your booking is confirmed for the rental vehicle on $date. It will be delivered on the said date for 12 hours. If it exceeds the 12-hour time limit, a fine of $10 per hour will be charged for any vehicle. <br><b>If you think this was a mistake, contact us at +91 79774 79542 or drop a mail at this email address. <br>Thank you,<br>Rachit Porwal,<br>EasyRide</b>";

            $mail->send();
            echo 'Booking confirmation email has been sent.';

            // Send a copy to yourself
            $mail->clearAddresses();
            $mail->addAddress('rachitporwal23@gmail.com', 'Rachit Porwal');
            $mail->Subject = 'EasyRide New Booking';
            $mail->Body = "Hello Rachit Porwal, <br>A new booking on $date by $name. <br>Contact details: <br>Phone Number: $phone, <br>Email address: $email, <br>Delivery Address: $address.";
            $mail->send();
            echo 'Booking details have been sent to Rachit Porwal.';
        }

        if (isset($_POST['send'])) {
            $cname = $_POST['name'];
            $cemail = $_POST['emailcontact'];
            $msg = $_POST['message'];

            $mail->setFrom('rachit23porwal@gmail.com', 'EasyRide');
            $mail->addAddress('rachitporwal23@gmail.com', 'Rachit Porwal');

            $mail->isHTML(true);
            $mail->Subject = 'EasyRide New Booking';
            $mail->Body = "Hello Rachit Porwal, <br>New enquiry by $cname - $cemail, <br>Message: $msg";

            $mail->send();
            echo 'Enquiry email has been sent to Rachit Porwal.';
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

header("Location: index.php");
exit();

?>
