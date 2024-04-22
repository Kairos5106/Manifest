<?php
function validatePasswords($password, $confirmPassword) {
    if ($password != $confirmPassword) {
        return false; // Passwords do not match
    } else {
        return true; // Passwords match
    }
}