<?php
if (isset($_POST['action'])) {
    $action =  $_POST['action'];
} else {
    $action =  'start_app';
}

switch ($action) {
    case 'start_app':
        $message = 'Enter some data and click on the Submit button.';
        break;
    case 'process_data':
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        /*************************************************
         * validate and process the name
         ************************************************/
        // 1. make sure the user enters a name
        // 2. display the name with only the first letter capitalized
if (empty($name)){
    $message = 'you must enter a name.';
}
$name = strtolower($name);
$name = ucfirst($name);

$i = strpos($name, ' ');
if ($i == false) {
    $fname == $name;
    
    
}else {
    $fname = substr($name, 0, $i);
}
        /*************************************************
         * validate and process the email address
         ************************************************/
        // 1. make sure the user enters an email
        // 2. make sure the email address has at least one @ sign and one dot character
if (empty($email)){
    $message = 'you must enter an email.';
}

else if ( filter_var($email, FILTER_VALIDATE_EMAIL) != false ) 
           
        /*************************************************
         * validate and process the phone number
         ************************************************/
        // 1. make sure the user enters at least seven digits, not including formatting characters
        // 2. format the phone number like this 123-4567 or this 123-456-7890
if (empty($phone)){
    $message = 'you must enter a phone number.';
}
$phone = str_replace('-', '', $phone);
$phone = str_replace('(', '', $phone);
$phone = str_replace(')', '', $phone);
$phone = str_replace(' ', '', $phone);
$phone = str_replace('.', '', $phone);


if (strlen($phone) == 7) {
    $part1 = substr($phone, 0, 3);
    $part2 = substr($phone, 3, 3);
    $phone = $part1 . '-' . $part2;
} else {
    
    $part1 = substr($phone, 0, 3);
    $part2 = substr($phone, 3, 3);
    $part3 = substr($phone, 6);
    $phone = $part1 . '-' . $part2 . '-' . $part3;
}



        /*************************************************
         * Display the validation message
         ************************************************/
        $message = "Hello $fname,\n\n" .
                "Thank you for entering this data:\n\n".
                   "Name: $name\n".
                   "Email: $email\n".
                   "Phone: $phone\n";

        break;
}
include 'string_tester.php';
?>