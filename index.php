<html>
<head>
<meta name="viewport" content="width=device-width" />
<title>Trigger</title>
</head>
        <body>
        Trigger switch:
        <form method="get" action="index.php">
                <input type="submit" value="On" name="turnon">
                <input type="submit" value="Off" name="switch">
        </form>
        <?php
        $setmode17 = shell_exec("/usr/bin/gpio -g mode 23 out");
        if(isset($_GET['switch'])){
                $gpio_off = shell_exec("/usr/bin/gpio -g write 23 1");
                sleep (0.5);
                echo "off";
        }
        if(isset($_GET['turnon'])){
                $gpio_on = shell_exec("/usr/bin/gpio -g write 23 0");
                echo "on";
        }
        ?>
        </body>
</html>
