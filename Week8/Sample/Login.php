<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="#" name="mainform" method="post">        
            Passcode: <input type="password" name="passcode" value="" /> 
            <input type="submit" value="Submit" />
        </form>
        
        
        <?php
        // put your code here
        
         session_start();
         
         if ( !empty($_POST) ) {
             
             if ( $_POST['passcode'] === 'test' ) {
                  $_SESSION['loggedin'] = true;
                  header('Location: admin.php');
             } else {
                 $_SESSION['loggedin'] = false; 
             }
                         
         }
         
         
        
        
        
        
        ?>
    </body>
</html>