<?php
function validateEmail($email)
{

    // $email = "example@gmail.com";

    list($username, $domain) = explode('@', $email);

    if (!checkdnsrr($domain, 'MX')) {
        // invalid domain
        echo "Invalid email";
        exit;
    }

    $smtp_socket = fsockopen("mx1.gmail.com", 25, $errno, $errstr, 30);

    if (!$smtp_socket) {
        // unable to connect to SMTP server
        echo "SMTP connection failed";
        exit;
    }

    $response = fgets($smtp_socket, 4096);

    if (substr($response, 0, 3) != '220') {
        // invalid response from SMTP server
        echo "Invalid SMTP response";
        exit;
    }

    fputs($smtp_socket, "HELO example.com\r\n");
    $response = fgets($smtp_socket, 4096);

    if (substr($response, 0, 3) != '250') {
        // invalid response from SMTP server
        echo "Invalid SMTP response";
        exit;
    }

    fputs($smtp_socket, "MAIL FROM:<example@example.com>\r\n");
    $response = fgets($smtp_socket, 4096);

    if (substr($response, 0, 3) != '250') {
        // invalid response from SMTP server
        echo "Invalid SMTP response";
        exit;
    }

    fputs($smtp_socket, "RCPT TO:<$email>\r\n");
    $response = fgets($smtp_socket, 4096);

    if (substr($response, 0, 3) != '250') {
        // invalid email
        echo "Invalid email";
        exit;
    }

    fputs($smtp_socket, "QUIT\r\n");
    fclose($smtp_socket);

    // valid email
    echo "Valid email";
}

?>