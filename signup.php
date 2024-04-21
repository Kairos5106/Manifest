<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];
    
        if ($password != $confirmPassword) {
            // Passwords do not match, display an alert
            echo "<script>alert('Passwords do not match');</script>";
        } else {
            // Passwords match, proceed with form submission or other actions
            // Here you can redirect the user to another page or process the form data
            // For example, you can use header("Location: success.php"); to redirect to a success page
        }
    };