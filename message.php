<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $message = $_POST['message'];

    echo $name;
    if(!empty($email) && !empty($message)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $receiver = "eurogulfitech@gmail.com";
            $subject = "From: $name <$email>";
            $body = "Name: $name\nEmail: $email\nContact: $contact\nCity: $city\nMessage: $message\n\nRegards:,\n$name";
            $sender = "From: $email";
            if(mail($receiver, $sender, $body, $sender)){
                echo "Your message has been Sent";
            }else{
                echo "Sorry, failed to send your Message!";
            }
        }else{
            echo "Enter a valid email address!";
        }
    }else{
        echo "Email and Passwod Field in Required!";
    }
?>