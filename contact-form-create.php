<?php
    $name = $_POST[ 'name' ];
    $user_email = $_POST    [ 'email' ];
    $contact_number = $POST [ 'contact number'];
    $message = $POST [ 'message' ];

    $email_from = 'podll0711@gmail.com';

    $email_subject = "New User Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $user_email.\n".
                        "User Contact Number: $contact_number.\n".
                            "User Message: $message.\n";
    

    $to = "podll0711@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $user_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: Contact.html");


?>