<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        
       $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
$dbs = $db->prepare('select * from account');
if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
$results = $dbs->fetchAll(PDO::FETCH_ASSOC);
echo '<table border="1">';
echo '<tr><th>ID</th><th>Email</th><th>PhoneNumber</th>';
echo '<th>howYouHeard</th><th>ContactVia</th><th>Comments</th>';
foreach ($results as $key => $value) {
echo '<tr>';
echo '<td>', $key ,'</td>';
echo '<td>', $value['email'] ,'</td>';
echo '<td>', $value['phone'] ,'</td>';
echo '<td>', $value['heard'] ,'</td>';
echo '<td>', $value['contact'] ,'</td>';
echo '<td>', $value['comments'] ,'</td>';

//echo '<td><a href="deleteuser.php?id=',$value['id'],'">Delete</a></td>';
echo '</tr>';
}
echo '</table>';
}
        
        ?>
    </body>
</html>
