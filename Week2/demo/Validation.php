<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



if ( !empty($_POST) ) {

    if ( empty($_POST['fname']) === false ) {
        echo $_POST['fname'];
    } else {
        $errorMsg = 'First name is empty';
    }

    if ( empty($_POST['lname']) === false ) {
        echo $_POST['lname'];
    } else {
        $errorMsg = 'Last name is empty';
    }

}
