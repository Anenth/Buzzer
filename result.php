<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="main.css" type="text/css" rel="stylesheet"/>
        <title></title>

        <script language="javascript" type="text/javascript">
            function playSound() {
                document.getElementById("dummy").innerHTML=
                    "<embed src='buzzer.mp3' hidden='true' autostart='true' loop='false' />";
            }
            function timedRefresh(timeoutPeriod) {
                setTimeout("location.reload(true);",timeoutPeriod);
            }
        </script>
    </head>
    <body>

        <span id="dummy"></span>
        <?php
        $myFile = "rank.txt";
        $fh = fopen($myFile, 'r') or die("can't open file");
        $tp = fread($fh, '2');
        fclose($fh);



        if ($tp == 1) {
            ?>
            <h1>Team A</h1>
            <script> playSound()</script>
            <?php
        }
//       continue;
        elseif ($tp == 2) {
            ?>
            <h1>Team B</h1>
            <script> playSound()</script>
            <?php
        } elseif ($tp == 3) {
            ?>
            <h1>Team C</h1>
            <script> playSound()</script>
            <?php
        } elseif ($tp == 4) {
            ?>
            <h1>Team D</h1>
            <script> playSound()</script>
            <?php
        } else {
            ?>        <script>
                    JavaScript:timedRefresh(5);
                      </script>
                <?php
        }
        ?>
            <form method="get" action="refresh.php"> 
                <input style="position: absolute; bottom: 10px; right: 10px; width: 100px; padding: 10px;
                       margin: 10px;
                       background: darkred;
                       box-shadow: 2px 2px 2px black;
                       color: white;
                       font-size: 15px;
                       font-weight: bold; 
                       text-shadow: 1px 0px 2px black;
                       cursor: pointer;
                       "type="submit" name="clear" value="Clear" />
            </form>
    </body>
</html>
