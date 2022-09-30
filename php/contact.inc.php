<?php

function validate_text($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// Check numbers
function validate_number($field)
{
    $filtered_number = filter_var($field, FILTER_SANITIZE_NUMBER_INT);
    // Remove "-" from number
    $number_to_check = str_replace("-", "", $filtered_number);
    // Check the length of number
    if (!empty($field)) {
        return $field;
    } elseif (strlen($number_to_check) < 1 || strlen($number_to_check) > 50) {
        return false;
    } else {
        return true;
    }
}
// define variables and set to empty values
$nameErr = $emailErr = $number_of_peopleErr = $general_or_vipErr = $dateErr = "";
$name = $email = $number_of_people = $general_or_vip = $date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = validate_text($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = validate_text($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["number_of_people"])) {
        $number_of_peopleErr = "Please enter number of people.";
    } else {
        $number_of_people = validate_number($_POST["number_of_people"]);
        if ($number_of_people == FALSE) {
            $number_of_peopleErr = "Please enter a valid number.";
        }
    }
    if (empty(isset($_POST['general_or_vip']))) {
        // $general_or_vip = $_POST['general_or_vip'];
        $general_or_vipErr = "Please select table status";
    } else {
        $general_or_vip = $_POST['general_or_vip'];
        // $general_or_vipErr = "Please select table status";
    }

    // Date of reservation
    if (empty($_POST['date'])) {
        $dateErr = "Please select date";
        // $date = $_POST['date'];
    } else {
        $date = $_POST['date'];
        // $dateErr = "Please select date";
    };

    // Additional information from textarea
    if (empty($_POST["message"])) {
        $message = "";
    } else {
        $message = validate_text($_POST["message"]);
    }

    if (empty($nameErr) && empty($emailErr) && empty($general_or_vipErr)) {
    } {
        // Recipient email address
        $to = '[YOUR EMAIL ADDRESS]';
        $subject = "[WRITE ANY SUBJECT]";

        // Create email headers
        $headers = 'From: ' . $full_names . "\r\n" .
            'Reply-To: ' . $full_names . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $txt = "<h2> A new reservation has come through from" . " " . $name . "</h2>" . "\n\n" .
            "<p>Name: $name </p>" . "\n" .
            "<p>Email: $email </p>" . "\n" .
            "<p>People: $number_of_people </p>" . "\n" .
            "<p>Status: $general_or_vip </p>" . "\n" .
            "<p>Date: $date </p>";
    }
}
