<?php

echo 'Hello World! from '. $_SERVER['SERVER_ADDR'];
echo gethostname();
$ip = exec("curl https://checkip.amazonaws.com");
echo "Public IP address: " . $ip;

?>


<!-- <!DOCTYPE html>
 
<html>
    <head>
        <title>
            Hello World!
        </title>
    </head>
 
    <body>
        echo 'Hello World! from '. $_SERVER['REMOTE_ADDR'];
    </body>
</html>
 -->
