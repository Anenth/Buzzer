<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="main.css" type="text/css" rel="stylesheet"/>
        <title></title>

    </head>
    <body>

        <?php
        $myFile = "rank.txt";
        $fh = fopen($myFile, 'r') or die("can't open file");
        $tp = fread($fh, '2');

        file_put_contents($myFile, "");
        fclose($fh);
        
        
        header("location:result.php");
        ?>
    </body>
</html>
