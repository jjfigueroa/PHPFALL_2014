<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
         <?php
            if ( !empty($_POST) ) {
                echo $_POST['fullname'];
            }
            
            
            $pdo = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
            
            //var_dump($pdo);
            $statement = $pdo->query('select * from users');
            
            $users = $statement->fetchAll(PDO::FETCH_ASSOC);
            var_dump($users);
            foreach ($users as $key => $value) {
                    echo '<p>', $key, ' = ', $value, '</p>';
                }    
            //var_dump($users);
            
            $arr = array();
            $arr['hello'] = 'hi'; //[] whats in there is the key, after the = is the value.
            $arr['hi'] = 'hi how are you';
            $arr[0] = 'zero';
            
            var_dump($arr);
                foreach ($arr as $key => $value) {
                    echo '<p>', $key, ' = ', $value, '</p>';
                }    
            
             foreach ($arr as $key => $value) {
                    echo '<p>', $value, '</p>';
             }
        ?>
        
        <form action="#" method="post">            
            <input type="text" name="fullname" value="" />            
            <input type="submit" value="submit" />            
        </form>
        
        
       
    </body>
</html>