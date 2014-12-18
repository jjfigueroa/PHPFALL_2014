<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <title>Mailing List Results</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
      
    <?php
            
            $error_message = '';
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$comments = filter_input(INPUT_POST, 'comments');
$heard = filter_input(INPUT_POST, 'heard_from');
$contact = filter_input(INPUT_POST, 'contact_via');
if (empty($email)) {
    $error_message .= 'email field required. </br>';
}else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false)
{
    
     $error_message .= 'email field not valid. </br>';
    
}
if ( empty($phone ) || !is_numeric ($phone) || (!isset($phone)) )
{
$error_message .= 'phone is a require field and only numbers please </br>';

}
if ( empty($heard )|| (!isset($heard)))
{
$error_message .= 'Please enter where you heard about us from. </br>';

}
if ( empty($contact)|| (!isset($contact)))
{
$error_message = 'whats the best way to contact you?? </br>';

}
$comments = htmlspecialchars($comments);

$email = htmlspecialchars($email);

$phone = htmlspecialchars($phone);
if (!empty($error_message)){
    echo '<center>'. $error_message. '</center>' ;
    include 'index.php';
    exit();
}else{ 
//connect to database
$db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
//use to insert to database table
$dbs = $db->prepare('insert into account set email = :email, phone = :phone,  heard = :heard_from, contact = :via_contact, comments = :comments');
//var_dump($dbs);


$dbs->bindParam(':email',$email, PDO::PARAM_INT);
$dbs->bindParam(':phone',$phone, PDO::PARAM_INT);
$dbs->bindParam(':via_contact',$heard, PDO::PARAM_INT);
$dbs->bindParam(':heard_from',$contact, PDO::PARAM_INT);
$dbs->bindParam(':comments',$comments, PDO::PARAM_INT);
}
if ( $dbs->execute() && $dbs->rowCount() > 0 )
{
echo 'Saved Data';
}
else
{
echo 'Data NOT Saved';
}
            ?>
         <div id="content">
            <h1>Account Information</h1>

            <label>Email Address:</label>
            <span><?php echo $email; ?></span><br />

            <label>Phone Number:</label>
            <span><?php echo $phone; ?></span><br /><br />
            
            <label>Heard From:</label>
            <span><?php echo $heard; ?></span><br />

            <label>Contact Via:</label>
            <span><?php echo $contact; ?></span><br /><br />

            <span>Comments:</span><br />
            <span><?php echo $comments ?></span><br />
            <a href="display.php"> Display Son! </a>
        </div>
    </body>
</html>