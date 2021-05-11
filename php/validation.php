<?php
    error_reporting(E_ERROR | E_PARSE);

    $name = isset($_POST['name']) ? clean($_POST['name']) : "";
    $surname = isset($_POST['surname']) ? clean($_POST['surname']) : "";
    $email = isset($_POST['email']) ? clean($_POST['email']) : "";
    $country = isset($_POST['country']) ? clean($_POST['country']) : "";
    $message = isset($_POST['message']) ? clean($_POST['message']) : "";

    $pattern_email = "/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/";
    $pattern_name_en = "/^[a-zA-Z]+$/u";
    $pattern_name_ru = "/^[а-яА-Я]+$/u";

    $response = "";

    if (preg_match($pattern_email, $email) === 1) {
        
    } else {
        $response = "invalid_email";
    }

    if ((preg_match($pattern_name_en, $name) === 1) || (preg_match($pattern_name_ru, $name) === 1)) {
    } else {
        $response = $response."invalid_name";
    }

    if ((preg_match($pattern_name_en, $surname) === 1) || (preg_match($pattern_name_ru, $surname) === 1)) {
    } else {
        $response = $response."invalid_surname";
    }

    echo $response;

    exit;

    function clean($value = "") {
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);
    
        return $value;
    }
?>