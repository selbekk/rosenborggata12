<?php

// Mail script
// Written for Rosenborggata 12 . no by Kristofer Selbekk (kris@kristoferselbekk.com)

header('Content-Type: application/json');

// Step 1 - Reject all but POST requests
if( $_SERVER['REQUEST_METHOD'] != "POST" ) {
    echo '{"error": "Request method not allowed"}';
    die();
}

// Step 2.1 - Validate input is filled out
if( !isset( $_POST['form-name'], $_POST['form-email'], $_POST['form-msg'] ) ) {
    echo '{"error": "name, email and msg must be set"}';
    die();
}

// Step 2.2 - Validate email
if (!filter_var($_POST['form-email'], FILTER_VALIDATE_EMAIL)) {
    echo '{"error": "email is not valid"}';
    die();
}

// Step 3 - compose mail
$email = $_POST['form-email'];
$name = $_POST['form-name'];
$msg = $_POST['form-msg'];

$from = $email;
//$to = "rosenborggata12@googlegroups.com";
$to = "kristofer.selbekk@bekk.no";
$subject = "Melding fra Rosenborggata12.no";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '. $name .' <'. $from .'>' . "\r\n";

$html = '<!DOCTYPE html><html><head><title>'. $subject .'</title></head>'.
        '<body>'.
            '<h1>Du har mottatt en e-post fra rosenborggata12.no</h1>'.
             '<p>'.
                '<strong>Avsender:</strong> '. $name .' - '. $email .'<br />'.
             '</p>'.
             '<h2>Melding</h2>'.
             '<p>'.
             $msg .
             '</p>'.
        '</body>'.
        '</html>';

// Step 4 - send mail and give response
$success = mail($to, $subject, $html, $headers);

// Step 5 - send response to client
echo ($success ? '{"success": true}' : '{"error": "server error"}');


?>