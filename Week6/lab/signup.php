<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$email = filter_input(INPUT_POST, 'email');
$message = '';
$password = filter_input(INPUT_POST, 'password');







if (empty($email)) {
    $message .= 'email field required.';
}else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false)
{
    
     $message .= 'email field not valid.';
    
}
        

if (empty($password)) {
    $message .= 'password field required.';
}else if  (strlen($password) < 4) {
    $message .= 'The Password must be at least 4 characters.';
}

if (!empty($message)){
    echo $message;
    include 'index.php';
    exit();
}else{ 
    
    $password = sha1($password);


$db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");

$dbs = $db->prepare('insert into signup set email=:email, password=:password');
$dbs->bindParam(':email', $email, PDO::PARAM_STR);
$dbs->bindParam(':password', $password, PDO::PARAM_STR);

if ($dbs->execute() && $dbs->rowcount() > 0) {
    
    echo '<h1> update complete</h1>';
     
} else{
    echo '<h1> user', 'was <strong> NOT </strong>updated</h1>';
}
}




?>