
<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



include 'views/header.php';

$action = 'home';

if ( !empty($_POST) && isset($_POST['action']) ) {
    $action = $_POST['action'];
    //filter_input(INPUT_POST, 'action')
} else if ( !empty($_GET) && isset($_GET['action']) ) {
    $action = $_GET['action'];
    //filter_input(INPUT_GET, 'action')
}

if ( $action === 'view_products' ) {
    
} else if ( $action === 'add_products' ) {
    
} else {
    // home
}


include 'views/footer.php';