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
             /*
* PDO instance object.
* use -> to access functions within the object
*/
            
            $pdo = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
            
            //var_dump($pdo);
            
            /*
* The SQL statement is used to query the database
*/
            
            $statement = $pdo->query('select * from users');
            
            
             /*
* Once the query is made you can fetch the data.
* I recommend to get the array back as an associative
* array
*/
            
            $users = $statement->fetchAll(PDO::FETCH_ASSOC);
            //var_dump($users);
            
             /*
* It returns a multidimentional array so we have a foreach loop
* within another foreach loop
*/
            
            
            foreach ($users as $key => $value) {
                    echo '<p>', $key, ' = ', $value, '</p>';
                }    
            //var_dump($users);
             /*
* Arrays in PHP are set this way. You can have an index or
* an assocative array (keys that are not numbers.)
*/
            $arr = array();
            $arr['hello'] = 'hi'; //[] whats in there is the key, after the = is the value.
            $arr['hi'] = 'hi how are you';
            $arr[0] = 'zero';
            
            var_dump($arr);
            
             /*
* Rather than for loops use for each loops in PHP
* to access the Keys and values of each index
*/
                foreach ($arr as $key => $value) {
                    echo '<p>', $key, ' = ', $value, '</p>';
                }    
             /*
* If you do not need the key you can just get the value.
*/
             foreach ($arr as $value) {
                    echo '<p>', $value, '</p>';
             }
        ?>
        
        <form action="#" method="post">            
            <input type="text" name="fullname" value="" />            
            <input type="submit" value="submit" />            
        </form>
        
        
       
    </body>
</html>