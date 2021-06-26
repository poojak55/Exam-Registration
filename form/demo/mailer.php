
<?php
$to_email = "prema29singanal@gmail.com";
$subject = "Email";
$body = "Hi,This is test email send by PHP Script";
$headers = "From: examreg123@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
