<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function check_login($username, $password){
        $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
        $dbs = $db->prepare('select * from signup where email=:email and password=:password');
        $dbs->bindParam(':email', $username, PDO::PARAM_STR);
    $dbs->bindParam(':password', $password, PDO::PARAM_STR);

    if ($dbs->execute() && $dbs->rowcount() > 0) {

       return true;

    } else{
        return false;
    }
}

var_dump(check_login("test@test1.com", "test"));



function valid_login($username, $password){
        $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
        $dbs = $db->prepare('select * from signup where email=:email and password=:password');
        $dbs->bindParam(':email', $username, PDO::PARAM_STR);
    $dbs->bindParam(':password', $password, PDO::PARAM_STR);

    if (empty($email) || (filter_var($email, FILTER_VALIDATE_EMAIL) == false) || (empty($password)) || (strlen($password) < 4)) {
        //($dbs->execute() && $dbs->rowcount() > 0) {

       return false;

    } else{
        return true;
    }
}

var_dump(check_login("test@test1.com", "test"));