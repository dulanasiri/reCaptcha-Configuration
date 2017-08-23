<?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $secretKey = "Your Secret code";
        $responseKey = $_POST['g-recaptcha-response'];
		
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey";
        $response = file_get_contents($url);
        $response = json_decode($response);
        if ($response->success)
            echo "Verification success. Your name is: $username";
        else
            echo "Verification failed!";
    }
?>