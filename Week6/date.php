<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            $today = date('m-d-y');
            $time = time()-10000;
                        
            
            $str2time = strtotime('11/12/14');
            
            echo '<br />';
            echo date('m-d-y', $time);
            
             echo '<br />';
            
            $dat = new DateTime();
            $dat->setTimestamp($time);
            echo $dat->format('m-d-y');
            
            
        
        
        
        ?>
    </body>
</html>