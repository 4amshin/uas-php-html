<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "makermoney942@gmail.com";
    $subject = "Pesan Baru dari" . $_POST["name"] ;
    $message = $_POST["message"];
    $headers = "Dari: " . $_POST["email"] . "\r\n" . 
                "Untuk: " . $_POST["email"] . "\r\n" . 
                "X-Shin: PHP/" . phpversion();

    //send the email
    $success = mail($to, $subject, $message, $headers);

    //return success status as JSON RESPONSE
    echo json_encode(array("success" => $success));
}

?>