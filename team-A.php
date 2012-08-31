<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="main.css" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_GET['v']))
            $id = $_GET['v'];
        $myFile = "rank.txt";
        $fh = fopen($myFile, 'a') or die("can't open file");
        fwrite($fh, $id . "\n");
        fclose($fh);
        if ($id == 1)
            header('location:team-A.html');
        elseif ($id == 2)
            header('location:team-B.html');
        elseif ($id == 3)
            header('location:team-C.html');
        elseif ($id == 4)
            header('location:team-D.html');
        ?>
        <div id="buzzer">

        </div>
    </body>
</html>
