<?php

    // check to see if the submit button was clicked
    if (isset($_POST['sendBtn'])){

        // get the POST data from the user
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // make sure all the form data was provided
        if ($name && $email && $message){
            // create the email headers to send
            $to_email = 'atifsheikh55@gmail.com';
            $subject = 'New Message from: '.$name;
            $headers = "From: ".$email;

            // send the message to the desired contact email
            if (mail($to_email, $subject, $message, $headers)){
                $display_message = 'Your message has been sent. You should hear back in a few hours!';
            }
            else
                $display_message = 'An error occurred while sending your email. Please try again, or email '.$to_email.' directly.';
        }
        else
            $display_message = 'Please fill out the entire form to send us a message.';
    }

?>