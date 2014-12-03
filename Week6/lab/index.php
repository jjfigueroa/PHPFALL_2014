<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>String Tester</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
         <div id="content">
        <h1>Sign Up</h1>
        <form action="signup.php" method="post">
        <input type="hidden" name="action" value="process_data"/>


        <label>E-Mail:</label>
        <input type="text" name="email" 
               value=""/>
        <br />

        <label>Password:</label>
        <input type="text" name="password" 
               value=""/>
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Submit" />
        <br />

        </form>

       

    </body>
</html>
